<form method="post" action="">
<input type="checkbox" id="checkAll" />
<label>Select/Deselect All</label><br /><br />
<input class="chk" type="checkbox" name="html" value="html" />
HTML<br/>
<input class="chk" type="checkbox" name="javascript" value="javascript" />
JavaScript<br/>
<input class="chk" type="checkbox" name="jquery" value="jquery" />
JQuery<br/><br/>
<input type="submit" name="submit" id="submit" value="Submit" />
</form>


<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'>
</script>
<script>
    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });
</script>
