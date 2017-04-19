<ol>
<li>ค้นหาข้อมูลจังหวัด
<form>
<div class="form-group">
<label for="prov">ชื่อจังหวัด</label>
<input class="form-control" type='text' name='prov' id='prov'>
</div>
</form>
<li>แสดงข้อมูล
<div class="container" id="result"> ผลการค้นหาจะแสดงตรงนี้
</div>
<script>
$(function(){
list = ['ขอนแก่น','อุดรธานี'];
$('#prov').autocomplete( { source: list } );
});
</script>
ทด