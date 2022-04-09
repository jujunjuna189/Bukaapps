@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">Event Monitoring Dashboard</h6>
            <p class="az-content-text tx-13 mg-b-0">Hi, welcome back! Here's your summary of your events.</p>
        </div>

        <div class="az-content-header-right">
            <div class="media">
                <div class="media-body">
                    <label>Start Date</label>
                    <h6>Oct 10, 2018</h6>
                </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
                <div class="media-body">
                    <label>End Date</label>
                    <h6>Oct 23, 2018</h6>
                </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
                <div class="media-body">
                    <label>Event Category</label>
                    <h6>All Categories</h6>
                </div><!-- media-body -->
            </div><!-- media -->
            <a href="" class="btn btn-purple">Export</a>
        </div>
    </div><!-- az-content-header -->

    <div class="card card-dashboard-twelve mg-b-20">
        <div class="card-header">
            <h6 class="card-title">Sales Overview <span>(All Events)</span></h6>

            <div class="sales-overview">
                <div class="media">
                    <div class="media-icon bg-purple"><i class="typcn typcn-ticket"></i></div>
                    <div class="media-body">
                        <label>Tickets Sold</label>
                        <h4>3,375</h4>
                        <span><strong>10.5%</strong> of 20,000 Total</span>
                    </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                    <div class="media-icon bg-teal"><i class="typcn typcn-ticket"></i></div>
                    <div class="media-body">
                        <label>Tickets Available</label>
                        <h4>16,625</h4>
                        <span><strong>89.5%</strong> of 20,000 Total</span>
                    </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                    <div class="media-icon bg-primary"><i class="typcn typcn-chart-area-outline"></i></div>
                    <div class="media-body">
                        <label>Net Revenue</label>
                        <h4><span>$</span>20,832</h4>
                        <span><strong>3.4%</strong> of Sales Avg.</span>
                    </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                    <div class="media-body">
                        <label>About Revenue</label>
                        <p>The total revenue from all events transactions. Depending on your implementation, this can include tax, discounts such as early bird promo. <a href="">Learn more</a></p>
                    </div><!-- media-body -->
                </div><!-- media -->
            </div><!-- sales-overview -->
        </div><!-- card-header -->
        <div class="card-body">
            <div class="chart-legend">
                <div><span class="bg-indigo"></span> Tickets Sold</div>
                <div><span class="bg-teal"></span> Tickets Available</div>
            </div><!-- chart-legend -->
            <div class="chart-wrapper">
                <div id="flotChart" class="flot-chart" style="padding: 0px;"><canvas class="flot-base" width="4106" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 2053.45px; height: 300px;"></canvas>
                    <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                        <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 165px; text-align: center;"><span>Oct</span><span>10</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 299px; text-align: center;"><span>Oct</span><span>11</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 434px; text-align: center;"><span>Oct</span><span>12</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 568px; text-align: center;"><span>Oct</span><span>13</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 703px; text-align: center;"><span>Oct</span><span>14</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 837px; text-align: center;"><span>Oct</span><span>15</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 972px; text-align: center;"><span>Oct</span><span>16</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1106px; text-align: center;"><span>Oct</span><span>17</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1240px; text-align: center;"><span>Oct</span><span>18</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1375px; text-align: center;"><span>Oct</span><span>19</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1509px; text-align: center;"><span>Oct</span><span>20</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1644px; text-align: center;"><span>Oct</span><span>21</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1778px; text-align: center;"><span>Oct</span><span>22</span></div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 146px; top: 0px; left: 1913px; text-align: center;"><span>Oct</span><span>23</span></div>
                        </div>
                        <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                            <div style="position: absolute; top: 286px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 12px; text-align: right;">0k</div>
                            <div style="position: absolute; top: 239px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 6px; text-align: right;">20k</div>
                            <div style="position: absolute; top: 192px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 6px; text-align: right;">40k</div>
                            <div style="position: absolute; top: 146px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 6px; text-align: right;">60k</div>
                            <div style="position: absolute; top: 99px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 6px; text-align: right;">80k</div>
                            <div style="position: absolute; top: 53px; font: 400 11px / 13px Roboto, sans-serif; color: rgb(150, 157, 171); left: 0px; text-align: right;">100k</div>
                        </div>
                    </div><canvas class="flot-overlay" width="4106" height="600" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 2053.45px; height: 300px;"></canvas>
                </div>
            </div><!-- chart-wrapper -->
        </div><!-- card-body -->
    </div><!-- card -->

    <div class="row row-sm mg-b-20">
        <div class="col-md-6">
            <div class="card card-dashboard-fourteen">
                <label class="az-content-label">Ticket Sales <span>(This Month)</span></label>
                <div class="card-body">
                    <div class="sparkline-wrapper"><span id="sparkline"><canvas width="415" height="100" style="display: inline-block; width: 415px; height: 100px; vertical-align: top;"></canvas></span></div>
                </div>
                <div class="card-footer row no-gutters">
                    <div class="col-4">
                        <h6>9,800</h6>
                        <label>Tickets For Sale</label>
                    </div><!-- col -->
                    <div class="col-4">
                        <h6>7,258</h6>
                        <label>Tickets Sold</label>
                    </div><!-- col -->
                    <div class="col-4">
                        <h6>2,542</h6>
                        <label>Tickets Unsold</label>
                    </div><!-- col -->
                </div><!-- card-footer -->
            </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 mg-t-20 mg-md-t-0">
            <div class="card card-dashboard-fourteen">
                <label class="az-content-label">Sales Revenue <span>(This Month)</span></label>
                <div class="card-body">
                    <h1><span>$</span>876,899.60</h1>
                    <label>Total Revenue</label>
                    <div class="row mg-t-15">
                        <div class="col-6">
                            <h4>1,500</h4>
                            <span>Events Hosted</span>
                            <div class="progress mg-t-5 ht-5">
                                <div class="progress-bar wd-80p" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>80% of your goals</small>
                        </div><!-- col -->
                        <div class="col-6">
                            <h4>991</h4>
                            <span>Events that earned</span>
                            <div class="progress mg-t-5 ht-5">
                                <div class="progress-bar wd-50p bg-teal" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>50% of your goals</small>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->
    </div><!-- row -->

    <div class="card card-dashboard-thirteen">
        <label class="az-content-label">Events Interest Comparison</label>
        <p class="az-content-text">A comparison of people who mark themeselves of their interest based from the date range given above.</p>
        <div class="row mg-t-20 mg-b-20">
            <div class="col-lg-4">
                <div id="flotPie" class="wd-100p ht-250" style="padding: 0px; position: relative;"><canvas class="flot-base" width="1320" height="500" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 660.141px; height: 250px;"></canvas><canvas class="flot-overlay" width="1320" height="500" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 660.141px; height: 250px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 49.75px; left: 384.774px;">
                        <div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">26%</div>
                    </span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 203.75px; left: 347.774px;">
                        <div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">39%</div>
                    </span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 117.75px; left: 223.774px;">
                        <div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">20%</div>
                    </span><span class="pieLabel" id="pieLabel3" style="position: absolute; top: 31.75px; left: 274.774px;">
                        <div style="font-size:11px; font-weight:500; text-align:center; padding:2px; color:white;">15%</div>
                    </span></div>
            </div><!-- col -->
            <div class="col-lg-8 mg-t-40 mg-lg-t-0">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="media-icon tx-purple">
                                <i class="icon ion-ios-man"></i>
                            </div>
                            <div class="media-body">
                                <h6>3,890 <span>(26%)</span></h6>
                                <label>Interested</label>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <span>People who have a ticket reservation of the event is automatically mark as interested.</span>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                        <div class="media">
                            <div class="media-icon tx-primary">
                                <i class="icon ion-ios-man"></i>
                            </div>
                            <div class="media-body">
                                <h6>8,005 <span>(39%)</span></h6>
                                <label>Going</label>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <span>People who have bought a ticket of the event is automatically mark as going.</span>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20 mg-lg-t-40">
                        <div class="media">
                            <div class="media-icon tx-teal">
                                <i class="icon ion-ios-man"></i>
                            </div>
                            <div class="media-body">
                                <h6>2,120 <span>(20%)</span></h6>
                                <label>Maybe</label>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <span>People who have viewed the event details and set themeselves as maybe.</span>
                    </div><!-- col -->
                    <div class="col-sm-6 mg-t-20 mg-lg-t-40">
                        <div class="media">
                            <div class="media-icon tx-gray-500">
                                <i class="icon ion-ios-man"></i>
                            </div>
                            <div class="media-body">
                                <h6>1,613 <span>(15%)</span></h6>
                                <label>Not Going</label>
                            </div><!-- media-body -->
                        </div><!-- media -->
                        <span>People who have viewed the event details and set themeselves as not going.</span>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- card -->
</div><!-- media-body -->

<div class="media-aside">
    <div class="row row-sm">
        <div class="col-md-6 col-lg-4 col-xl-12">
            <div class="card card-dashboard-calendar">
                <h6 class="card-title">Event Calendar</h6>
                <div class="media az-media-date">
                    <h1>17</h1>
                    <div class="media-body">
                        <p>Nov 2018</p>
                        <span>Saturday</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="fc-datepicker hasDatepicker" id="dp1647341675870">
                        <div class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" style="display: block;">
                            <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-all"><a class="ui-datepicker-prev ui-corner-all" data-handler="prev" data-event="click" title="Prev"><span class="ui-icon ui-icon-circle-triangle-w">Prev</span></a><a class="ui-datepicker-next ui-corner-all" data-handler="next" data-event="click" title="Next"><span class="ui-icon ui-icon-circle-triangle-e">Next</span></a>
                                <div class="ui-datepicker-title"><span class="ui-datepicker-month">March</span>&nbsp;<span class="ui-datepicker-year">2022</span></div>
                            </div>
                            <table class="ui-datepicker-calendar">
                                <thead>
                                    <tr>
                                        <th scope="col" class="ui-datepicker-week-end"><span title="Sunday">Su</span></th>
                                        <th scope="col"><span title="Monday">Mo</span></th>
                                        <th scope="col"><span title="Tuesday">Tu</span></th>
                                        <th scope="col"><span title="Wednesday">We</span></th>
                                        <th scope="col"><span title="Thursday">Th</span></th>
                                        <th scope="col"><span title="Friday">Fr</span></th>
                                        <th scope="col" class="ui-datepicker-week-end"><span title="Saturday">Sa</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class=" ui-datepicker-week-end ui-datepicker-other-month undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2022"><a class="ui-state-default ui-priority-secondary" href="#" aria-current="false" data-date="27">27</a></td>
                                        <td class=" ui-datepicker-other-month undefined" data-handler="selectDay" data-event="click" data-month="1" data-year="2022"><a class="ui-state-default ui-priority-secondary" href="#" aria-current="false" data-date="28">28</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="1">1</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="2">2</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="3">3</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="4">4</a></td>
                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="5">5</a></td>
                                    </tr>
                                    <tr>
                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="6">6</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="7">7</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="8">8</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="9">9</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="10">10</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="11">11</a></td>
                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="12">12</a></td>
                                    </tr>
                                    <tr>
                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="13">13</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="14">14</a></td>
                                        <td class=" ui-datepicker-days-cell-over undefined ui-datepicker-current-day ui-datepicker-today" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default ui-state-highlight ui-state-active ui-state-hover" href="#" aria-current="true" data-date="15">15</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="16">16</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="17">17</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="18">18</a></td>
                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="19">19</a></td>
                                    </tr>
                                    <tr>
                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="20">20</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="21">21</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="22">22</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="23">23</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="24">24</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="25">25</a></td>
                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="26">26</a></td>
                                    </tr>
                                    <tr>
                                        <td class=" ui-datepicker-week-end undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="27">27</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="28">28</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="29">29</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="30">30</a></td>
                                        <td class=" undefined" data-handler="selectDay" data-event="click" data-month="2" data-year="2022"><a class="ui-state-default" href="#" aria-current="false" data-date="31">31</a></td>
                                        <td class=" ui-datepicker-other-month undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default ui-priority-secondary" href="#" aria-current="false" data-date="1">1</a></td>
                                        <td class=" ui-datepicker-week-end ui-datepicker-other-month undefined" data-handler="selectDay" data-event="click" data-month="3" data-year="2022"><a class="ui-state-default ui-priority-secondary" href="#" aria-current="false" data-date="2">2</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- card -->
        </div><!-- col -->
        <div class="col-md-6 col-lg-8 col-xl-12 mg-t-20 mg-md-t-0 mg-xl-t-20">
            <div class="card card-dashboard-events">
                <div class="card-header">
                    <h6 class="card-title">November 2018</h6>
                    <h5 class="card-subtitle">Upcoming Events</h5>
                </div><!-- card-header -->
                <div class="card-body">
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="event-indicator bg-purple"></div>
                            <label>Nov 20 <span>Tuesday</span></label>
                            <h6>PH World Mall Lantern Festival</h6>
                            <p><strong>8AM - 4PM</strong> Bay Area, San Francisco</p>
                            <small><span class="tx-danger">Sold Out</span> (3000 tickets sold)</small>

                            <div class="event-user">
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="">20+ more</a>
                            </div><!-- az-event-user -->
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <div class="event-indicator bg-primary"></div>
                            <label>Nov 23 <span>Friday</span></label>
                            <h6>Asia Pacific Generation Workshop</h6>
                            <p><strong>8AM - 5PM</strong> Singapore</p>
                            <small><span class="tx-warning">Sold Out Soon</span> (12 tickets left)</small>

                            <div class="event-user">
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="">20+ more</a>
                            </div><!-- az-event-user -->
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <div class="event-indicator bg-pink"></div>
                            <label>Nov 23 <span>Friday</span></label>
                            <h6>Korea Smart Device Trade Show</h6>
                            <p><strong>8AM - 5PM</strong> Singapore</p>
                            <small><span class="tx-success">Free Registration</span> (Limited seats only)</small>

                            <div class="event-user">
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="" class="az-img-user"><img src="" alt=""></a>
                                <a href="">20+ more</a>
                            </div><!-- az-event-user -->
                        </div><!-- list-group-item -->
                    </div><!-- list-group -->
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col -->
    </div><!-- row -->
</div><!-- media-aside -->
@endsection