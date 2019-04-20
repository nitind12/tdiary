 <div class="wrapper">
     <div class="container">
        <div class="row">
            <div class="span3">
                <?php $this->load->view('templates/sidebar'); ?>
            </div>
            <div class="span9">
                <!-- code here -->
                 <?php $this->load->view('satyam/'.$page_); ?>
            </div>
        </div>
    </div>
</div>