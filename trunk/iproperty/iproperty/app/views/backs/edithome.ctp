<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    echo $javascript->link('tiny_mce/tiny_mce.js');
 ?>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
                theme_advanced_toolbar_location : "top",
                //บรรทัดที่ 1
                //theme_advanced_buttons1 : "bold,italic,underline",
                theme_advanced_font_sizes : "10px,12px,14px,16px,24px",
                //เอาที่ไม่จำเป็นออก
                theme_advanced_disable : "image,anchor,help,styleselect"
	});
        //See more
        //http://tinymce.moxiecode.com/wiki.php/Configuration
        //http://tinymce.moxiecode.com/wiki.php/Buttons/controls

</script>
<?php
    echo $form->create(null,array('action'=>'saveHome'));

    //dropdownList
    //echo 'purchase';
    //echo $form->year('purchase',2005,2009);
    //$form->input('associated_item_id');
    //echo $form->input('Homes.topic',array('type'=>'select','option'=>'Head'));
    $options = array();
    foreach ($Head as $topic) {
        $options[$topic["Homes"]["id"]] = $topic["Homes"]["topic"];
        echo $options[$topic["Homes"]["id"]].'<br/>';
    }
    //$form->select("fieldname", $options, "value2", array("class"=>"myclass","id"=>"myid"), 0);
    echo $form->input('dropdown',array('options'=>$options));




//สามารถระบุ table เองได้โดยใส่ name เป็น ชื่อmodel.field
    //show header topic
    echo $form->input('Homes.topic',array('label'=>'Input Header Topic:'));

    //show editor
    echo $form->textarea('Homes.content',array('style'=>'width: 100%')) ;

    //show date
    echo $form->input('Homes.date',array('label'=>'Input date','id'=>'dateHomes','type'=>'text'));
    ?>

   <!--<script>
	$(function() {
		//$( "#dateHomes" ).datepicker();
		//$( "#dateHomes" ).datapicker.formatDate('dd-mm-yy');
		//$( "#dateHomes" ).datepicker({ dateFormat: 'yy-mm-dd'});
                $( "#dateHomes" ).datepicker({ dateFormat: 'dd/mm/yy'});
	});
	</script>-->
        <script>
	$(function()
        
        {
            
		$( "#dateHomes" ).datepicker({ dateFormat: 'yy-mm-dd'});
	});
        </script>
<?php
    echo $form->end('submit');
?>
