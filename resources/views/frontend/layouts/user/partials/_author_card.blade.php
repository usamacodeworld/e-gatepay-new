<style>
    /* remove any click/active highlight */
    .cursor-pointer:focus,
    .cursor-pointer:active,
    .cursor-pointer.active {
        background: transparent !important;
        outline: none !important;
        box-shadow: none !important;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const users = document.querySelectorAll(".cursor-pointer");

        users.forEach(el => {
            // prevent bootstrap or browser from adding "active"
            el.addEventListener("mousedown", function(e) {
                e.preventDefault(); // stops focus/active state
            });

            // also in case any "active" class is auto-added, remove it
            el.addEventListener("click", function() {
                el.classList.remove("active");
            });
        });
    });
</script>

<li class="d-lg-inline-block d-none">
    <div class="user cursor-pointer "> <img class="d-inline-block rounded-circle"
            src="{{ asset(auth()->user()->avatar_alt) }}" height="40" alt="img">
        <h6 class="d-md-inline-block d-none mb-0">{{ auth()->user()->name }}</h6>
        <div class="author-card">
            <div class="list-details"> <a href="{{ route('user.settings.profile') }}"> <span> <x-icon name="user-cog" />
                    </span> {{ __('Edit Profile') }} </a> {{-- Logout Action --}} <a href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <span> <x-icon
                            name="logout" /> </span> {{ __('Logout') }} </a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}"> @csrf </form>
            </div>
        </div>
    </div>
</li>
