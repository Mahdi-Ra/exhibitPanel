<!DOCTYPE html>
<html lang="en" class="team">

<!--html header-->
@include('layout.header')
<!--html header-->

<body class="loggedin fix-header card-no-border fix-sidebar {{ $page['page'] ?? '' }}">

    <!--main wrapper-->
    <div id="main-wrapper">

        <!--top nav-->
        @include('nav.topnav') @include('pages.settings.leftmenu-settings')
        <!--top nav-->

        <!--page wrapper-->
        <div class="page-wrapper {{ app()->getLocale() == 'persian_br' ? 'right-direction' : 'left-direction' }}" id="settings-wrapper" style="margin-left: 210px;">
        <style>
               @media (min-width: 1024px) {
                .left-direction {
                    margin-left: 210px;
                    }
                    /*.right-direction {
                    margin-left: 210px;
                    }*/
                }
            </style>

            <!--overlay-->
            <div class="page-wrapper-overlay js-close-side-panels hidden" data-target=""></div>
            <!--overlay-->

            <!--preloader-->
            <div class="preloader">
                <div class="loader">
                    <div class="loader-loading"></div>
                </div>
            </div>
            <!--preloader-->


            <!-- main content -->
            @yield('content')
            <!-- /#main content -->

        </div>
        <!--page wrapper-->
    </div>
    <!--main wrapper-->
</body>
<!--common modals h-->
@include('modals.common-modal-wrapper')
@include('modals.plain-modal-wrapper')
@include('modals.actions-modal-wrapper')
@include('pages.authentication.modal.relogin')
<!--common modals-->
<!--js footer-->
@include('layout.footerjs')
<!--js footer-->



</html>