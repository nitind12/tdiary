

<div class="span9">
    <div class="content">
         <div class="module">
            <div class="module-head">
              <div style="float:right">
                    <input type="hidden" value="<?php echo date("Y-m-d")?>" name="date" id="date"> <?php echo date("Y-m-d")?>
                </div>
               
                    
               <br>

            </div>

            <div class="module-body ">
<table>
<?php foreach ($downloads as $item) {?>
  
  <tr><td><a href="<?php  echo base_url('./assets/upload_notes/'. $item->upload_notes);?>"><?php echo $item->upload_notes;?></a></td>
<?php }
?>
            </div>
         

            </form>
        </div>
    </div>
</div>
    


    