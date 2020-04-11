@extends('index')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <!--mail inbox start-->
            <div class="mail-box">
                <aside class="sm-side">
                    <div class="user-head">
                        <a href="javascript:;" class="inbox-avatar">
                            <img src="{{asset('Uploads/customar/'.$customar->photo)}}" alt="" width="60">
                        </a>
                        <div class="user-name">
                            <h5><a href="#">{{$customar->customar_name}}</a></h5>
                            <span><a href="#">{{$customar->address}}</a></span>
                        </div>
                    </div>
                    <br>
                    <ul class="inbox-nav inbox-divider">
                        <li class="active">
                            <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-danger float-right mt-3">2</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o"></i>{{$customar->customars->customar_group_name}}</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                        </li>
                        <li>
                            <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="badge badge-info float-right mt-3">30</span></a>
                        </li>
                        <li>
                            <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                        </li>
                    </ul>

                    <div class="inbox-body text-center">
                        <a href="{{route('all_customar')}}" class="btn btn-info">
                            <i class="fa fa-reply"></i>
                            Back
                        </a>
                    </div>

                </aside>
                <aside class="lg-side">
                    <div class="inbox-head">
                        <h3>Details</h3>
                        <form class="float-right position" action="#">
                            <div class="input-append">
                                <input type="text"  placeholder="Search Mail" class="sr-input">
                                <button type="button" class="btn sr-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="card">
                                <div class="card-body">
                                    <div class="adv-table">
                                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                                            <thead>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th class="hidden-phone">Engine version</th>
                                                <th class="hidden-phone">CSS grade</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="gradeX">
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td class="center hidden-phone">4</td>
                                                <td class="center hidden-phone">X</td>
                                            </tr>

                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center hidden-phone">419.3</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center hidden-phone">522.1</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>OmniWeb 5.5</td>
                                                <td>OSX.4+</td>
                                                <td class="center hidden-phone">420</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>iPod Touch / iPhone</td>
                                                <td>iPod</td>
                                                <td class="center hidden-phone">420.1</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>S60</td>
                                                <td>S60</td>
                                                <td class="center hidden-phone">413</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.0</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.0</td>
                                                <td>Win 95+ / OSX.3+</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera for Wii</td>
                                                <td>Wii</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nokia N800</td>
                                                <td>N800</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nintendo DS browser</td>
                                                <td>Nintendo DS</td>
                                                <td class="center hidden-phone">8.5</td>
                                                <td class="center hidden-phone">C/A<sup>1</sup></td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.1</td>
                                                <td>KDE 3.1</td>
                                                <td class="center hidden-phone">3.1</td>
                                                <td class="center hidden-phone">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.3</td>
                                                <td>KDE 3.3</td>
                                                <td class="center hidden-phone">3.3</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.5</td>
                                                <td>KDE 3.5</td>
                                                <td class="center hidden-phone">3.5</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 4.5</td>
                                                <td>Mac OS 8-9</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.1</td>
                                                <td>Mac OS 7.6-9</td>
                                                <td class="center hidden-phone">1</td>
                                                <td class="center hidden-phone">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.2</td>
                                                <td>Mac OS 8-X</td>
                                                <td class="center hidden-phone">1</td>
                                                <td class="center hidden-phone">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.1</td>
                                                <td>Embedded devices</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.4</td>
                                                <td>Embedded devices</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Dillo 0.8</td>
                                                <td>Embedded devices</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Links</td>
                                                <td>Text only</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Lynx</td>
                                                <td>Text only</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">C</td>
                                            </tr>
                                            <tr class="gradeU">
                                                <td>Other browsers</td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td class="center hidden-phone">-</td>
                                                <td class="center hidden-phone">U</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th class="hidden-phone">Engine version</th>
                                                <th class="hidden-phone">CSS grade</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </aside>
            </div>
            <!--mail inbox end-->
        </section>
    </section>
@endsection
