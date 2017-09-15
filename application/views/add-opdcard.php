        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">เพิ่มไฟล์ HN</h3>
                </div>
            </div>
            <script type="text/javascript">
            $(function(){
            $("#dateInput").datepicker({
                //dateFormat: 'dd/mm/yyyy'
                format:'dd-mm-yyyy'
               });
             });

            </script>
            <form method="post" action="addopdtodb"  enctype="multipart/form-data">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="panel panel-default">

                          <div class="panel-body">
                              <div class="row">
                                  <div class="col-lg-12">
                                      <form role="form">
                                          <div class="form-group">
                                              <label>HN Number</label>
                                              <input name="hnnum" class="form-control">
                                          </div>
                                          <div class="form-group">
                                              <label>ชื่อ - นามสกุล</label>
                                              <input name="hnname" class="form-control">
                                          </div>
                                          <div class="form-group">
                                              <label>วันที่รับบริการ</label>
                                              <div class="input-group date">
                                                <input type="hidden" name="yy" class="form-control" value="<?php echo date("Y");?>">
                                                <input type="hidden" name="dm" class="form-control" value="<?php echo date("dm");?>">
                                                <input type="text" class="form-control pull-left" name="dateInput" id="dateInput" value="<?php echo date("d-m-Y");?>" />
                                                <div class="input-group-addon">
                                                  <i class="fa fa-calendar"></i>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                              <label>เลือกประเภท</label>
                                              <select name="hntype" class="form-control">
                                                <option value="" disabled selected>เลือกประเภท</option>
                                                <?php
                                                  foreach($hn_type as $hnt)
                                                  { ?>
                                                <option value="<?php echo $hnt->hntype_id; ?>"><?php echo $hnt->hntype_name; ?></option>

                                                <?php }
                                                ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label>เลือก File</label>
                                              <input name="filUpload[]" id="filUpload" type="file" multiple="multiple">
                                              <p class="help-block">เลือกไฟล์ นามสกุล .jpg เท่านั้น</p>
                                          </div>

                                          <button type="submit" class="btn btn-primary">บันทึก</button>
                                          <button type="reset" class="btn btn-default">ยกเลิก</button>
                                          </div>

                                      </form>
                                  </div>
                              </div>
                              <!-- /.row (nested) -->
                          </div>
                          <!-- /.panel-body -->
                      </div>
                      <!-- /.panel -->
                  </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('vendor/metisMenu/metisMenu.min.js')?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('dist/js/sb-admin-2.js')?>"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url('plugins/datepicker/bootstrap-datepicker.js')?>"></script>

</body>

</html>
