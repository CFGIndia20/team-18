<!--These script files and div element have to be imported for it to function-->
<script type="text/javascript">

    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: "en"}, 'google_translate_element');
    }
    
    function changeLanguageByButtonClick() {
      var language = document.getElementById("language").value;
      var selectField = document.querySelector("#google_translate_element select");
      for(var i=0; i < selectField.children.length; i++){
        var option = selectField.children[i];
        // find desired langauge and change the former language of the hidden selection-field 
        if(option.value==language){
           selectField.selectedIndex = i;
           // trigger change event afterwards to make google-lib translate this side
           selectField.dispatchEvent(new Event('change'));
           break;
        }
      }
    }
    </script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div id="google_translate_element" style="display:none"></div>

<!--Till here are imports-->

<!--A bar for translate feature -->
<!--IMplement this BELOW the navbar. If you include it with normal navbar it will come into the dropdown and BECOME HIDDEN!!!!-->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
    <div class="container"> -->
    <ul class="navbar-nav">
      <li class="nav-item pb-0 pt-2">
        <select id = "language">
          <option value = "en" >English</option>
          <option value = "te">Telegu</option>
          <option value = "ur">Urdu</option>
        </select>
        <a class="btn pl-0 pt-0" onclick="changeLanguageByButtonClick()">Translate</a>
      </li>
    </ul>
<!-- </nav> -->