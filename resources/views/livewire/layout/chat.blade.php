<div>

    @if($user->type_user_id != 1 && $user->type_user_id != 2)

        <script>

            window.chatwootSettings = {"position":"right","type":"standard","launcherTitle":"Fale conosco no chat"};

            (function(d,t) {
            var BASE_URL="https://chat.halfbeneficios.com";
            var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=BASE_URL+"/packs/js/sdk.js";
            g.defer = true;
            g.async = true;
            s.parentNode.insertBefore(g,s);
            g.onload=function(){
                window.chatwootSDK.run({
                websiteToken: 'whZtqDyLVkPEXQVE3nKEetLh',
                baseUrl: BASE_URL
                })
            }
            })(document,"script");

            window.addEventListener('chatwoot:ready', function() {

                window.$chatwoot.setUser("{{ $user->id }}", {
                    email: '{{ $user->email }}',
                    name: '{{ $user->name }}',
                    phone_number: ''
                });

            })

        </script>

    @endif

</div>
