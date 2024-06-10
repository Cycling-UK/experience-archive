/**
 * @file JS file to perform authentication and registration for miniOrange
 *       Authentication service.
 */
(function($) {
    jQuery(document).ready(function() {
        if(!$.trim(document.getElementById('miniorange_oauth_client_client_id').value).length)
        {
            // jQuery("div[class*='form-item-miniorange-oauth-']").hide();
        }
        jQuery('#miniorange_oauth_login_link').parent().hide();
        jQuery('#miniorange_oauth_client_app').parent().show();
        jQuery('#miniorange_oauth_client_app').click(function()
        {
            var base_url = window.location.origin;
            var baseUrl = base_url;
            var appname = document.getElementById('miniorange_oauth_client_app').value;

            if (appname == 'Custom_Open_id' || appname=='Azure AD B2C' || appname=='Onelogin' || appname=='AWS Cognito' || appname=='miniOrange'  || appname=='Okta_openid')
            {
                jQuery('#mo_oauth_app_name_div').parent().show();
                jQuery('#miniorange_oauth_client_app_name').parent().show();
                jQuery('#miniorange_oauth_client_display_name').parent().show();
                jQuery('#miniorange_oauth_client_client_id').parent().show();
                jQuery('#miniorange_oauth_client_client_secret').parent().show();
                jQuery('#miniorange_oauth_client_scope').parent().show();
                jQuery('#miniorange_oauth_login_link').parent().show();
                jQuery('.form-item-miniorange-oauth-client-facebook-instr').show();
                jQuery('#miniorange_oauth_client_auth_ep').parent().show();
                jQuery('#miniorange_oauth_client_access_token_ep').parent().show();
                jQuery('#miniorange_oauth_client_user_info_ep').parent().hide();
                jQuery('#miniorange_oauth_client_jkws_uri').parent().show();
                jQuery('#test_config_button').show();
                jQuery('#callbackurl').parent().show();
                jQuery('#mo_oauth_authorizeurl').attr('required','true');
                jQuery('#mo_oauth_accesstokenurl').attr('required','true');
                jQuery('#mo_oauth_resourceownerdetailsurl').attr('required','true');

                if(appname=='Custom_Open_id'){
                    document.getElementById('miniorange_oauth_client_scope').value='';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='';
                }else if(appname=='Azure AD B2C'){
                    document.getElementById('miniorange_oauth_client_scope').value='openid';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://{tenant-name}.b2clogin.com/{tenant-name}.onmicrosoft.com/{policy-name}/oauth2/v2.0/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://{tenant-name}.b2clogin.com/{tenant-name}.onmicrosoft.com/{policy-name}/oauth2/v2.0/token';
                    document.getElementById('miniorange_oauth_client_jkws_uri').value='https://{tenant-name}.b2clogin.com/{tenant-name}.onmicrosoft.com/{policy-name}/discovery/v2.0/keys';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='';
                }else if(appname=='AWS Cognito'){
                    document.getElementById('miniorange_oauth_client_scope').value='openid';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://{cognito-app-domain}/oauth2/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://{cognito-app-domain}/oauth2/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='';
                }else if(appname=='miniOrange'){
                    document.getElementById('miniorange_oauth_client_scope').value='email profile openid';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://login.xecurify.com/moas/idp/openidsso';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://login.xecurify.com/moas/rest/oauth/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='';
                }else if(appname=='Onelogin'){
                    document.getElementById('miniorange_oauth_client_scope').value='openid';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://<site-url>.onelogin.com/oidc/auth';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://<site-url>.onelogin.com/oidc/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='';
                }else if(appname=='Okta_openid'){
                    document.getElementById('miniorange_oauth_client_scope').value='openid email profile';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://{yourOktaDomain}.com/oauth2/default/v1/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://{yourOktaDomain}.com/oauth2/default/v1/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='';
                }
            }

            else if(appname=='Facebook' || appname=='Google' || appname=='Okta_oauth' || appname=='Slack' || appname=='Box' || appname=='Github' || appname=='Zendesk' || appname=='WHMCS' || appname=='Wild Apricot' || appname=='Salesforce' || appname=='LinkedIn' || appname=='Azure AD' || appname=='Keycloak' || appname=='Custom' || appname=='Strava' || appname=='FitBit' || appname=='Discord' || appname=='Line'){
                jQuery('#mo_oauth_app_name_div').parent().show();
                jQuery('#miniorange_oauth_client_app_name').parent().show();
                jQuery('#miniorange_oauth_client_display_name').parent().show();
                jQuery('#miniorange_oauth_client_client_id').parent().show();
                jQuery('#miniorange_oauth_client_client_secret').parent().show();
                jQuery('#miniorange_oauth_client_scope').parent().show();
                jQuery('#miniorange_oauth_login_link').parent().show();
                jQuery('.form-item-miniorange-oauth-client-facebook-instr').show();
                //jQuery('#callbackurl').parent().show();
                /* jQuery('#mo_oauth_authorizeurl').attr('required','true')
                jQuery('#mo_oauth_accesstokenurl').attr('required','true');
                jQuery('#mo_oauth_resourceownerdetailsurl').attr('required','true');*/
                jQuery('#miniorange_oauth_client_auth_ep').parent().show();
                jQuery('#miniorange_oauth_client_access_token_ep').parent().show();
                jQuery('#miniorange_oauth_client_user_info_ep').parent().show();
                jQuery('#miniorange_oauth_client_jkws_uri').parent().hide();
                jQuery('#test_config_button').show();
                //   jQuery('#callbackurl').val(baseUrl+'/mo_login').parent().show();
                jQuery('#callbackurl').parent().show();
                jQuery('#mo_oauth_authorizeurl').attr('required','true');
                jQuery('#mo_oauth_accesstokenurl').attr('required','true');
                jQuery('#mo_oauth_resourceownerdetailsurl').attr('required','true');

                if(appname=='Facebook'){
                    document.getElementById('miniorange_oauth_client_scope').value='email';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://www.facebook.com/dialog/oauth';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://graph.facebook.com/v2.8/oauth/access_token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://graph.facebook.com/me/?fields=id,name,email,age_range,first_name,gender,last_name,link&access_token=';
                }else if(appname=='Google'){
                    document.getElementById('miniorange_oauth_client_scope').value='email+profile';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://accounts.google.com/o/oauth2/auth';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://www.googleapis.com/oauth2/v4/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://www.googleapis.com/oauth2/v1/userinfo';
                }else if(appname=='LinkedIn'){
                    document.getElementById('miniorange_oauth_client_scope').value='r_basicprofile';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://www.linkedin.com/oauth/v2/authorization';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://www.linkedin.com/oauth/v2/accessToken';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://api.linkedin.com/v2/me';
                }else if(appname=='Salesforce'){
                    document.getElementById('miniorange_oauth_client_scope').value='id';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://login.salesforce.com/services/oauth2/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://login.salesforce.com/services/oauth2/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://login.salesforce.com/services/oauth2/userinfo';
                }else if(appname=='Wild Apricot'){
                    document.getElementById('miniorange_oauth_client_scope').value='auto';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://{your_account_url}/sys/login/OAuthLogin';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://oauth.wildapricot.org/auth/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://api.wildapricot.org/v2.1/accounts/{account_id}/contacts/me';
                }else if(appname=='Azure AD'){
                    document.getElementById('miniorange_oauth_client_scope').value='openid';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://login.microsoftonline.com/{tenant-ID}/oauth2/v2.0/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://login.microsoftonline.com/{tenant-ID}/oauth2/v2.0/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://graph.microsoft.com/beta/me';
                }else if(appname=='Keycloak'){
                    document.getElementById('miniorange_oauth_client_scope').value='email profile';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='{Keycloak_base_URL}/realms/{realm-name}/protocol/openid-connect/auth';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='{Keycloak_base_URL}/realms/{realm-name}/protocol/openid-connect/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='{Keycloak_base_URL}/realms/{realm-name}/protocol/openid-connect/userinfo';
                }else if(appname=='Custom'){
                    document.getElementById('miniorange_oauth_client_auth_ep').value='';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='';
                } else if(appname=='Strava'){
                    document.getElementById('miniorange_oauth_client_scope').value='public';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://www.strava.com/oauth/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://www.strava.com/oauth/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://www.strava.com/api/v3/athlete';
                }else if(appname=='FitBit'){
                    document.getElementById('miniorange_oauth_client_scope').value='profile';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://www.fitbit.com/oauth2/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://api.fitbit.com/oauth2/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://api.fitbit.com/1/user/-/profile.json';
                }else if(appname=='Discord'){
                    document.getElementById('miniorange_oauth_client_scope').value='identify email';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://discordapp.com/api/oauth2/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://discordapp.com/api/oauth2/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://discordapp.com/api/users/@me';
                }else if(appname=='Line'){
                    document.getElementById('miniorange_oauth_client_scope').value='Profile openid email';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://access.line.me/oauth2/v2.1/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://api.line.me/oauth2/v2.1/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://api.line.me/v2/profile';
                }else if(appname=='WHMCS'){
                    document.getElementById('miniorange_oauth_client_scope').value='openid profile email';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://{yourWHMCSdomain}/oauth/authorize.php';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://{yourWHMCSdomain}/oauth/token.php';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://{yourWHMCSdomain}/oauth/userinfo.php?access_token=';
                }else if(appname=='Zendesk'){
                    document.getElementById('miniorange_oauth_client_scope').value='read write';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://{subdomain}.zendesk.com/oauth/authorizations/new';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://{subdomain}.zendesk.com/oauth/tokens';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://{subdomain}.zendesk.com/api/v2/users';
                }else if(appname=='Box'){
                    document.getElementById('miniorange_oauth_client_scope').value='root_readwrite';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://account.box.com/api/oauth2/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://api.box.com/oauth2/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://api.box.com/2.0/users/me';
                }else if(appname=='Github'){
                    document.getElementById('miniorange_oauth_client_scope').value='user repo';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://github.com/login/oauth/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://github.com/login/oauth/access_token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://api.github.com/user';
                }else if(appname=='Slack'){
                    document.getElementById('miniorange_oauth_client_scope').value='users.profile:read';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://slack.com/oauth/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://slack.com/api/oauth.access';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://slack.com/api/users.profile.get';
                }else if(appname=='Okta_oauth'){
                    document.getElementById('miniorange_oauth_client_scope').value='openid email profile';
                    document.getElementById('miniorange_oauth_client_auth_ep').value='https://{yourOktaDomain}.com/oauth2/default/v1/authorize';
                    document.getElementById('miniorange_oauth_client_access_token_ep').value='https://{yourOktaDomain}.com/oauth2/default/v1/token';
                    document.getElementById('miniorange_oauth_client_user_info_ep').value='https://{yourOktaDomain}.com/oauth2/default/v1/userinfo';
                }
            }
        })
    }
    );
}(jQuery));