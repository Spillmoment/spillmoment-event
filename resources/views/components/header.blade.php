<div id="header">
    <header class="header">
        <div>
            <div class="flex-header">
                <div class="col-head">
                    <div class="title-brand-icons">
                        <a href="/">
                            <span>
                                <img src="{{ asset('assets/frontend/img/logo.png') }}" alt="logo spillmoment" />
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-head" id="searchbox">
                    <div class="closebar" onclick="searchHide()">
                        <a href="javascript:void(0)"><i class="fas fa-angle-up"></i></a>
                    </div>
                    <form action="" method="">
                        <div class="input-search">
                            <input type="text" placeholder="Temukan vendor pernikahan mu...." aria-autocomplete="off"
                                autocomplete="off" name="search" />
                            <button><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-head">
                    <div class="auth-link">
                        <a href="/login">Login</a>|<a href="/register">Register</a>
                    </div>
                </div>
                <div class="col-head">
                    <div class="bar">
                        <a href="#" onclick="searchVisible()" style="margin: 0 2rem"><i class="fas fa-search"></i></a>
                        <a href="#" onclick="barVisible()"><i class="fas fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="small-header">
        <div class="closebar" onclick="barHide()">
            <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
        </div>
        <div class="menu-bar">
            <a href="#">Vendor</a>
            <a href="#">Paket Spesial</a>
            <a href="#">Promosi & Acara</a>
            <a href="#">Galeri</a>
            <a href="{{ route('event.index') }}">Event</a>
            <a href="#">Tentang</a>
            <div class="menu-auth">
                <br /><br />
                <a href=""><button>Masuk</button></a>
                <a href=""><button>Mendaftar</button></a>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    function barHide() {
        document.querySelector(".small-header").style.animation =
            "slideOutRight 0.5s cubic-bezier(0.33, 0.67, 0.83, 0.67)";
        setTimeout(function () {
            document.querySelector(".small-header").style.display = "none";
        }, 480);
    }

    function barVisible() {
        document.querySelector(".small-header").style.display = "block";
        document.querySelector(".small-header").style.animation =
            "slideInRight 0.2s cubic-bezier(0.33, 0.67, 0.83, 0.67)";
    }

    function searchVisible() {
        document.querySelector("#searchbox").style.display = "block";
        document.querySelector("#searchbox").style.animation =
            "slideInDown 0.4s ease-in";
    }

    function searchHide() {
        document.querySelector("#searchbox").style.animation =
            "slideOutUp 0.4s ease-out";
        setTimeout(function () {
            document.querySelector("#searchbox").style.display = "none";
        }, 380);
    }

</script>
@endpush
