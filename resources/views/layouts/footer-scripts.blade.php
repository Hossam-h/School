<!-- jquery -->
<script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->

<script type="text/javascript">var plugin_path = "{{ asset('assets/js') }}/";</script>




<!-- chart -->
<script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
@yield('js')
<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>
<script>

$(document).ready(function() {
            $('select[name="Grade_id"]').on('change', function() {

                var Grade_id = $(this).val();
                if (Grade_id) {

                    $.ajax({
                        url: "{{ URL::to('Get_classerooms') }}/" + Grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {

                            $('select[name="Classroom_id"]').empty();
                            $('select[name="Classroom_id"]').append('<option selected disabled > {{trans("My_Classes_trans.choose_class")}} </option>');

                            for (var key in data) {

                                $('select[name="Classroom_id"]').append('<option value="' + key + '">' + data[key] + '</option>');
                            }

                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });

   //---------------------------------------------------------------

   $(document).ready(function() {
            $('select[name="Classroom_id"]').on('change', function() {

                var Classroom_id = $(this).val();
                if (Classroom_id) {

                    $.ajax({
                        url: "{{ URL::to('Get_section') }}/" + Classroom_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {

                            //console.log(1);


                            $('select[name="section_id"]').empty();

                            for (var key in data) {

                                $('select[name="section_id"]').append('<option value="' + key + '">' + data[key] + '</option>');
                            }

                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });

//---------------------------------------------------------------------- promotion class

$(document).ready(function() {
            $('select[name="Grade_id_new"]').on('change', function() {

                var Grade_id = $(this).val();
                if (Grade_id) {

                    $.ajax({
                        url: "{{ URL::to('Get_classerooms') }}/" + Grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {

                           // console.log(1);

                            $('select[name="Classroom_id_new"]').empty();
                            $('select[name="Classroom_id_new"]').append('<option selected disabled > {{trans("My_Classes_trans.choose_class")}} </option>');
                            for (var key in data) {

                                $('select[name="Classroom_id_new"]').append('<option value="' + key + '">' + data[key] + '</option>');
                            }

                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });

   //--------------------------------------------------------------- promotion section

   $(document).ready(function() {
            $('select[name="Classroom_id_new"]').on('change', function() {

                var Classroom_id = $(this).val();
                if (Classroom_id) {

                    $.ajax({
                        url: "{{ URL::to('Get_section') }}/" + Classroom_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {

                            $('select[name="section_id_new"]').empty();
                            for (var key in data) {

                                $('select[name="section_id_new"]').append('<option value="' + key + '">' + data[key] + '</option>');
                            }

                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });

</script>