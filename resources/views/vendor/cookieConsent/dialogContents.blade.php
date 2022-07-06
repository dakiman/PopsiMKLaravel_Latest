<div class="js-cookie-consent cookie-consent">
    <div class="row">
        <div class="col-md-4 col-sm-12 button-fixed">
            <div class="p-3 pb-4 bg-custom text-white">
                <div class="row">
                    <div class="offset-10 col-2 text-center">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                </div>
                <p class="text-white">{!! trans('cookieConsent::texts.message') !!}</p>
                <button type="button" class="btn btn-primary w-100 js-cookie-consent-agree cookie-consent__agree">{{ trans('cookieConsent::texts.agree') }}</button>
{{--                <button type="button" class="btn btn-dark bg-transparent w-100 mt-1 js-cookie-consent-agree cookie-consent__agree">{{ trans('cookieConsent::texts.disagree') }}</button>--}}
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .bg-custom{
        background-color:rgba(0, 0, 0, 0.75);
    }
    .button-fixed{
        bottom: 0;
        position: fixed;
        right: 0;
        border-radius: 4px;
    }
    .fas{
        cursor: pointer;
        font-size: 24px;
    }
</style>

<script>
    let closeButton = document.querySelector('.close');

    closeButton.addEventListener("click", () => {
        console.log('hi')
        let cookieBanner = document.querySelector('.js-cookie-consent')
        cookieBanner.style.display = "none";
    })
</script>
