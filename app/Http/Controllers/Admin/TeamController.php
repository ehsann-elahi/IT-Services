<?php

namespace  App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.teamList', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.addTeam');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'expertise' => 'required|unique:teams,expertise',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->only(['name', 'expertise']);

    // Handling Image Upload
    if ($file = $request->file('image')) {
        $name = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/upload/prod'), $name);
        $data['image'] = $name;
    }

    Team::create($data);

    return redirect()->route('teams.index')->with('success', 'Team member created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(string $id)
{
    $team = Team::findOrFail($id); // 👈 database se record nikalna
    return view('admin.team.editTeam', compact('team'));
}


    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, string $id)
{
    $team = Team::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
         'expertise'  => 'required|string|max:255|unique:teams,expertise,' . $team->id,
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->only(['name', 'expertise']);

    // Handling Image Update
    if ($request->hasFile('image')) {
        // Delete Old Image
        if ($team->image && file_exists(public_path('assets/upload/prod/' . $team->image))) {
            unlink(public_path('assets/upload/prod/' . $team->image));
        }

        // Upload New Image
        $file = $request->file('image');
        $name = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/upload/prod'), $name);
        $data['image'] = $name;
    }

    $team->update($data);

    return redirect()->route('teams.index')->with('success', 'Team member updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $team = Team::findOrFail($id);

    // Delete Image from Storage
    if ($team->image && file_exists(public_path('assets/upload/prod/' . $team->image))) {
        unlink(public_path('assets/upload/prod/' . $team->image));
    }

    // Delete the team member
    $team->delete();

    return redirect()->route('teams.index')->with('success', 'Team member deleted successfully.');
}

}
