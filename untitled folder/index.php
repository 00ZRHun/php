<?php
    $selectedOptions = $_POST['langOpt'];
?>

<select name="langOpt[]" multiple id="langOpt">
    <option value="C++">C++</option>
    <option value="C#">C#</option>
    <option value="Java">Java</option>
    <option value="Objective-C">Objective-C</option>
    <option value="JavaScript">JavaScript</option>
    <option value="Perl">Perl</option>
    <option value="PHP">PHP</option>
    <option value="Ruby on Rails">Ruby on Rails</option>
    <option value="Android">Android</option>
    <option value="iOS">iOS</option>
    <option value="HTML">HTML</option>
    <option value="XML">XML</option>
</select>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- MultiSelect CSS & JS library -->
<link href="multiselect/jquery.multiselect.css" rel="stylesheet" />
<script src="multiselect/jquery.multiselect.js"></script>
<script>
    $('select[multiple]').multiselect();

    $('#langOpt').multiselect({
        columns: 1,
        placeholder: 'Select Languages'
    });

    $('#langOpt').multiselect({
        columns: 1,
        placeholder: 'Select Languages',
        search: true
    });

    $('#langOpt').multiselect({
        columns: 1,
        placeholder: 'Select Languages',
        search: true,
        selectAll: true
    });

    $('#langOptgroup').multiselect({
        columns: 4,
        placeholder: 'Select Languages',
        search: true,
        selectAll: true
    });
</script>