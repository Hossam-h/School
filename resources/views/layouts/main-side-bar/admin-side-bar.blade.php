<div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->

                    <!-- menu title -->
                                 <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">{{__('main_side.Grades')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Grades.index')}}">{{__('main_side.Grades_list')}}</a></li>

                        </ul>
                    </li>

                    
                    <!-- menu item calendar-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">{{trans('main_side.classes')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Classrooms.index')}}">{{trans('main_side.List_classes')}}</a></li>
                        </ul>
                    </li>



                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#section-menue">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">{{trans('Sections_trans.title_page')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="section-menue" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Sections.index')}}">{{trans('Sections_trans.title_page')}}</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#add_parent">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">{{trans('main_side.Parents')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="add_parent" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Myparent.index')}}">{{trans('main_side.Add_Parent')}}</a></li>
                            <li><a href="{{route('showall')}}">all</a></li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#add_teacher">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">Teacher</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="add_teacher" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('teacher.index')}}">Teacher</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#add_student">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">{{trans('Students_trans.Students')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="add_student" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Students.create')}}">{{trans('Students_trans.add_student')}}</a></li>
                            <li><a href="{{route('Students.index')}}">{{trans('Students_trans.list_st')}}</a></li>
                            <li><a href="{{route('Promotion.index')}}">{{trans('Students_trans.Promotions')}}</a></li>
                            <li><a href="{{route('Promotion.create')}}">{{trans('Students_trans.managements_promo')}}</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#graduated">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">{{trans('main_side.Graduate_students')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="graduated" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Graduate.create')}}">{{trans('main_side.add_Graduate')}}</a></li>
                            <li><a href="{{route('Graduate.index')}}">{{trans('main_side.list_Graduate')}}</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Fees">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">{{trans('main_side.Accounts')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Fees" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('Fees.create')}}">{{trans('main_side.Add_fees')}}</a></li>
                            <li><a href="{{route('Fees.index')}}">{{trans('main_side.list_fees')}}</a></li>
                            <li><a href="{{route('Reciept.index')}}">{{trans('main_side.Reciept')}}</a></li>
                            <li><a href="{{route('ProcessingFess.index')}}">{{trans('main_side.ProcessingFess')}}</a></li>
                            <li><a href="{{route('Payment_students.index')}}">?????????? ??????????</a></li>

                        </ul>
                    </li>



                    <!-- menu item table -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attends">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">???????? ????????????
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Attends" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('studentAttend.index')}}">??Attendes</a> </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#subjects">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">????????????
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="subjects" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('subjects.index')}}">?????????? ????????????</a> </li>
                            <li> <a href="{{route('subjects.create')}}">?????????? ????????????</a> </li>

                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Exam">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">??????????????????
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Exam" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Exams.index')}}">?????????? ????????????????????</a> </li>
                            <li> <a href="{{route('Exams.create')}}">?????????? ????????????</a> </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Quizzes">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">????????????????????
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Quizzes" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('Quizzes.index')}}">????????????????????</a> </li>
                            <li> <a href="{{route('questions.index')}}">??????????????</a> </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#zoom">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">?????? ??????????????
                                    </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="zoom" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('online_classes.index')}}">?????? ??????????????</a> </li>

                        </ul>
                    </li>


                            <li> <a href="{{route('settinges.index')}}"> ??????????????????</a> </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
                            <div class="pull-left"><i class="ti-id-badge"></i><span class="right-nav-text">Authentication</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="authentication" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="login.html">login</a> </li>
                            <li> <a href="register.html">register</a> </li>
                            <li> <a href="lockscreen.html">Lock screen</a> </li>
                        </ul>
                    </li>
                    <!-- menu item maps-->
                    <li>
                        <a href="maps.html"><i class="ti-location-pin"></i><span class="right-nav-text">maps</span>
                            <span class="badge badge-pill badge-success float-right mt-1">06</span></a>
                    </li>
                    <!-- menu item timeline-->
                    <li>
                        <a href="timeline.html"><i class="ti-panel"></i><span class="right-nav-text">timeline</span>
                        </a>
                    </li>
                    <!-- menu item Multi level-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level">
                            <div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi
                                    level Menu</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level
                                    item 1<div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="auth" class="collapse">
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level
                                            item 1.1<div class="pull-right"><i class="ti-plus"></i></div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <ul id="login" class="collapse">
                                            <li>
                                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice">level item 1.1.1<div class="pull-right"><i class="ti-plus"></i></div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <ul id="invoice" class="collapse">
                                                    <li> <a href="#">level item 1.1.1.1</a> </li>
                                                    <li> <a href="#">level item 1.1.1.2</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">level item 1.2</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#error">level
                                    item 2<div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="error" class="collapse">
                                    <li> <a href="#">level item 2.1</a> </li>
                                    <li> <a href="#">level item 2.2</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
