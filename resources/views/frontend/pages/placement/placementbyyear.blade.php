<div class="placementpage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/placement/placement-page.webp')}}" alt="placement">
            </div>
            <div class="col-12 py-xl-4 py-lg-4 py-md-4 py-3 text-xl-start text-lg-start text-md-start text-sm-start text-center">
                <h4 class="mb-0 pagesHeading text-capitalize">BIIB Campus Placement</h4>
                <p>We would further like to add that our state-of-the-art IT infrastructure and rigorous training have resulted in 100% placement every year. Our 100% placement record is testimony to the core values and processes of Sri Balaji University, Pune (SBUP). We humbly submit that over 886 students across all specializations in all constituent institutes (BIMM, BITM, BIIB, BIMHRD) received 903 job offers. Despite the challenging pandemic phase, students of Sri Balaji University, Pune, received more job opportunities. As of 8th June 2022, our campus placement record stands at 100% for the batch 2020-22 with the average package of 7.8 lakhs per annum and the highest package of 19.25 lakhs per annum.</p>
            </div>
        </div>

        <div class="row mt-2 m-0">
            <div class="col-12 p-xl-0 p-lg-0 p-md-0">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    @foreach($placementsByYear as $year => $value)
                        <div class="accordion-item rounded-0 mb-2">
                            <h2 class="accordion-header" id="panelsStayOpen-heading{{$loop->index}}">
                            <button class="accordion-button rounded-0 fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-{{$loop->index}}" aria-expanded="true" aria-controls="panelsStayOpen-collapse-{{$loop->index}}">
                                BIIB Campus Placement ({{$year}})
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapse-{{$loop->index}}" class="accordion-collapse collapse {{ $loop->index == 0 ? 'show' : ''}}" aria-labelledby="panelsStayOpen-heading{{$loop->index}}">
                                <div class="accordion-body">
                                    <div class="col-xl-12">
                                        <div class="sortingList">
                                            <div>
                                                <table class="table table-bordered align-middle table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-3" scope="col">Sr. No</th>
                                                            <th class="p-3" scope="col">Institute Name</th>
                                                            <th class="p-3" scope="col">Student Name</th>
                                                            <th class="p-3" scope="col">Company Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($value as $data)
                                                            <tr>
                                                                <td class="p-3"> {{$loop->index + 1}} </td>
                                                                <td class="p-3 w-25">{{$data->institute_name}}</td>
                                                                <td class="p-3 w-25">{{$data->name}}</td>
                                                                <td class="p-3 w-25">{{$data->recruiter_name}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>