<!doctype html>
<html>
    <head>
<<<<<<< HEAD
        <title>My Page</title>
=======

        <title>My page</title>
>>>>>>> 9afc5ee2d7f23a46327315593a84546dde784c55
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            .dataTables_wrapper {
                min-height: 500px
            }
            
            .dataTables_processing {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                margin-left: -50%;
                margin-top: -25px;
                padding-top: 20px;
                text-align: center;
                font-size: 1.2em;
                color:grey;
            }
            body{
                padding: 15px;
<<<<<<< HEAD
                background-image: url("assets/img/c.jpg");
            }
            li {
    float: left;
   
 }
 
 li a  {
    display: block;
    color: black;
     text-align: center;
     padding: 14px 16px;
     text-decoration: none;
     border-right: 1px solid #111;
 }
 
 li a:hover{
  background-color: yellow;}
  
  #content2{
      margin-top: 100px;
     color:blue;
 }
 ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
     overflow: hidden;
     background-color: rgba(255,255,255,0.5);
     position: fixed;
     top: 0;
     width: 100%;
 
 }
=======
                outline-style: dotted;outline-color: yellow;
                font-family:"Courier New", Courier, monospace;
                background-image: url("assets/img/c.jpg");
            }
            r{
    font-family: verdana
}
#h{
    border-radius: 50%;
    }
.1{
    border-radius: 20%;
    }


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgba(255,255,255,0.5);
    position: fixed;
    top: 0;
    width: 100%;

}

li {
    float: left;
    
}

li a  {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    border-right: 1px solid #111;
}

li a:hover{
 background-color: yellow;}
 
 #content2{
     margin-top: 100px;
     color:blue;
 }

>>>>>>> 9afc5ee2d7f23a46327315593a84546dde784c55
        </style>
    </head>
    <body>
    <ul>
<<<<<<< HEAD
    <li><a href="<?php echo site_url('Home');?>">Home</a></li>
 <li><a href="<?php echo site_url('More');?>">More about me</a></li>
 <li><a href="<?php echo site_url('users');?>">Contact me</a></li></ul>

=======
<li><a href="<?php echo site_url('Home');?>">Home</a></li>
<li><a href="<?php echo site_url('More');?>">More about me</a></li>
<li><a href="<?php echo site_url('users');?>">Contact me</a></li>
</ul>
>>>>>>> 9afc5ee2d7f23a46327315593a84546dde784c55
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-center:0px">Users List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('users/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Name</th>
		    <th>Nickname</th>
		    <th>Email</th>
		    <th>Phone Number</th>
		    <th>Home Address</th>
		    <th>Gender</th>
		    <th>Comments</th>
		    <th width="200px">Action</th>
                </tr>
            </thead>
	    
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                var t = $("#mytable").dataTable({
                    initComplete: function() {
                        var api = this.api();
                        $('#mytable_filter input')
                                .off('.DT')
                                .on('keyup.DT', function(e) {
                                    if (e.keyCode == 13) {
                                        api.search(this.value).draw();
                            }
                        });
                    },
                    oLanguage: {
                        sProcessing: "loading..."
                    },
                    processing: true,
                    serverSide: true,
                    ajax: {"url": "users/json", "type": "POST"},
                    columns: [
                        {
                            "data": "user_id",
                            "orderable": false
                        },{"data": "Name"},{"data": "Nickname"},{"data": "Email"},{"data": "Phone_number"},{"data": "Home_address"},{"data": "Gender"},{"data": "Comments"},
                        {
                            "data" : "action",
                            "orderable": false,
                            "className" : "text-center"
                        }
                    ],
                    order: [[0, 'desc']],
                    rowCallback: function(row, data, iDisplayIndex) {
                        var info = this.fnPagingInfo();
                        var page = info.iPage;
                        var length = info.iLength;
                        var index = page * length + (iDisplayIndex + 1);
                        $('td:eq(0)', row).html(index);
                    }
                });
            });
        </script>
    </body>
</html>