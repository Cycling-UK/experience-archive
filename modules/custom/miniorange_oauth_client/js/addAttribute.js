var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
script.type = 'text/javascript';

document.getElementsByTagName('head')[0].appendChild(script);

    var countPro = 0;
    var countProfileAttributes = 0;

    document.addEventListener('DOMContentLoaded', function(){
     
      var profile_mapping = jQuery('select[name^=user_profile_field_name]');
      countProfileAttributes = profile_mapping.length;
      countProfile = countProfileAttributes;
      if(countProfileAttributes == 0){
        add_profile_attribute();
      }

    });
   

    function remove_profile(id){
      var res = id.replace("edit-user-profile-delete-", "profile_");
      jQuery('#'+res).remove();
      countProfileAttributes-=1;
    }

    document.getElementById('add_profile_attribute').onclick = function(){
      add_profile_attribute();
    };

    function add_profile_attribute(){
      var strr = document.getElementById('profile_string').innerHTML;
      var strArray = strr.split("=&gt;");
      var str = '';
      for (var i =0; i < (strArray.length-1); i++) {
        str += '<option value=' + strArray[i] + '>' + strArray[++i] + '</option>';
      }

      var sel = '<div class="mo_oauth_client_profile_otp_row" id="profile_'+countProfile+'">' +
        '<div class="mo_oauth_client_profile_sp_name">' +
        '<div class="js-form-item form-item js-form-type-select form-type-select js-form-item-user-sp-role-name-' + countProfile + ' form-item-user-sp-role-name-' + countProfile + 'form-no-label">' +
        '<select style="width:80%;" data-drupal-selector="edit-user-sp-role-name-' + countProfile + '" id="edit-user-sp-role-name-' + countProfile + '" name="user_profile_field_name[' + countProfile + ']" class="mo_oauth_client_form_select">' + str + '</select>' +
        '</div>' +
        '</div>' +
        '<div class="mo_oauth_client_profile_idp_name">' +
        '<div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-user-idp-role-name-' + countProfile + ' form-item-user-idp-role-name-' + countProfile + ' form-no-label">' +
        '<input style="width:80%;" data-drupal-selector="edit-user-idp-role-name-' + countProfile + '" type="text" id="edit-user-idp-role-name-' + countProfile + '" name="user_profile_idp_attribute_name[' + countProfile + ']" value="" size="20" maxlength="128" class="mo_oauth_client_form_text" />' +
        '</div>' +
        '</div>' +
        '<div class="mo_oauth_client_profile_delete"><input onclick="javascript:remove_profile(this.id);" data-drupal-selector="edit-user-profile-delete-' + countProfile + '" type="submit" id="edit-user-profile-delete-' + countProfile + '" name="op" value="-" class="button button--primary" />' +
        '</div>' +
        '</div>';

      if(countProfileAttributes != 0){
        jQuery(sel).insertAfter(jQuery(".mo_oauth_client_profile_otp_row:last"));
        countProfileAttributes += 1;
      }
      else{
        jQuery(sel).insertAfter(jQuery("#before_profile_list_upa"));
        countProfileAttributes += 1;
      }
      countProfile+=1;
    }