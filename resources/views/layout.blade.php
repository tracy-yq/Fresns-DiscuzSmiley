<!doctype html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Fresns" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discuz 表情包</title>
    <link rel="stylesheet" href="{{ @asset('/static/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ @asset('/static/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ @asset('/static/css/fresns-panel.css') }}">
    @stack('css')
</head>

<body>
    <main>
        <div class="container-lg p-0 p-lg-3">
            <div class="bg-white shadow-sm mt-4 mt-lg-2 p-3 p-lg-5">
                <!-- top -->
                <div class="row mb-2">
                    <div class="col-7">
                        <h3>Discuz 表情包 <span class="badge bg-secondary fs-9">{{ $version }}</span></h3>
                        <p class="text-secondary">Discuz X 系统自带的默认四组表情。</p>
                    </div>
                    <div class="col-5">
                        <div class="input-group mt-2 mb-4 justify-content-lg-end px-1" role="group">
                            <a class="btn btn-outline-secondary" href="/assets/plugins/DiscuzSmiley/discuz-smiley.zip" role="button"><i class="bi bi-download"></i> 下载表情包文件</a>
                        </div>
                    </div>
                </div>

                <!-- Menu -->
                <div class="mb-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ Route::is('discuz-smiley.admin.index') ? 'active' : '' }}" href="{{ route('discuz-smiley.admin.index') }}">表情导入</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ Route::is('discuz-smiley.admin.smiley') ? 'active' : '' }}" href="{{ route('discuz-smiley.admin.smiley') }}">表情更新</a>
                        </li>
                    </ul>
                </div>

                <!-- Setting -->
                @yield('content')
                <!-- Setting end -->
            </div>
        </div>
    </main>

    <footer>
        <div class="copyright text-center">
            <p class="mt-5 mb-5 text-muted">&copy; <span class="copyright-year"></span> Fresns</p>
        </div>
    </footer>

    <!--Toast-->
    <div class="fresns-tips">
        @include('DiscuzSmiley::tips')
    </div>

    <script src="{{ @asset('/static/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ @asset('/static/js/jquery.min.js') }}"></script>
    <script>
        // copyright-year
        var yearElement = document.querySelector('.copyright-year');
        var currentDate = new Date();
        var currentYear = currentDate.getFullYear();
        yearElement.textContent = currentYear;

        // set timeout toast hide
        const setTimeoutToastHide = () => {
            $('.toast.show').each((k, v) => {
                setTimeout(function () {
                    $(v).hide();
                }, 1000);
            });
        };
        setTimeoutToastHide();
    </script>
    @stack('script')
</body>
</html>
