@php

$profile = App\Models\AdminProfile::whereAdminId(auth()->user()->id)->first();

@endphp
<!-- Add custom styles if needed -->
<style>
  /* Style adjustments for menu links if required */
  .menu-icon-grid a,
  .dropdown-item {
    font-size: 14px;
  }
</style>

<body class="text-left">
  <div class="app-admin-wrap layout-sidebar-large">

    @auth('admin')
    <div class="main-header">

      <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
      </div>


      <div class="header-part-right">
        <!-- Full screen toggle -->
        <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
        <div class="dropdown">
          <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="badge text-bg-primary" id="notification-count">0</span>
            <i class="i-Bell text-muted header-icon"></i>
          </div>
          <!-- Notification dropdown -->
          <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none ps" aria-labelledby="dropdownNotification">
            <!-- Notifications will be inserted here -->
          </div>
        </div>
        <!-- User avatar dropdown -->
        <div class="dropdown-header">
          @if(!$profile)
          <i class="i-Lock-User mr-1"></i>{{auth()->user()->name}}
          @else
          <i class="i-Lock-User mr-1"></i>{{auth()->user()->AdminProfile->first_name}} {{auth()->user()->AdminProfile->last_name}}
          @endif
        </div>
        <div class="dropdown">
          <div class="user col align-self-end">
            @if(!$profile)
            <img src="{{asset('/assets/admin/images/faces/5.webp')}}" id="userDropdown" alt="img" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @else
            <img src="{{auth()->user()->AdminProfile->image}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @endif
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

              <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
              <a class="dropdown-item" href="{{route('adminchangepassword')}}">Change Password</a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout').submit();">Sign Out</a>
              <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
      function timeAgo(dateStr) {
        const date = new Date(dateStr);
        const now = new Date();
        const seconds = Math.floor((now - date) / 1000);
        if (seconds < 60) return `${seconds}s ago`;
        if (seconds < 3600) return `${Math.floor(seconds / 60)}m ago`;
        if (seconds < 86400) return `${Math.floor(seconds / 3600)}h ago`;
        return `${Math.floor(seconds / 86400)}d ago`;
      }

      function loadNotifications() {
        $.get("{{ route('admin.getNotifications') }}", function(response) {
          $('#notification-count').text(response.count); // Update notification count
          const dropdown = $('.notification-dropdown');
          dropdown.empty();
          if (response.notifications.length === 0) {
            dropdown.append('<p class="text-center text-muted m-2">No new notifications</p>');
          } else {
            response.notifications.forEach(function(notif) {
              dropdown.append(`
                        <a href="{{route('admin.contacts.index')}}" class="dropdown-item d-flex notif-click" data-id="${notif.id}">
                            <div class="notification-icon">
                                <i class="i-Receipt-3 text-success me-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>${notif.message}</span>
                                    <span class="badge badge-pill text-bg-success ms-1 me-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ms-auto">${timeAgo(notif.created_at)}</span>
                                </p>
                            </div>
                        </a>
                    `);
            });
          }
        });
      }
      setInterval(loadNotifications, 5000);
      // Mark notification as read when clicked
      $(document).on('click', '.notif-click', function(e) {
        const notifId = $(this).data('id');
        $.ajax({
          type: 'POST',
          url: '/admin/notifications/mark-read', // Laravel route for marking notification as read
          data: {
            _token: "{{ csrf_token() }}",
            id: notifId
          },
          success: function() {
            // Optionally, you can remove the notification from the dropdown or reload it
            loadNotifications(); // Reload the notifications list after marking as read
          }
        });
      });
    </script>

    <!-- ============ Search UI Start ============= -->
    <!-- ============ Search UI End ============= -->
    @endauth
  