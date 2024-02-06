<div class="studentCouncil py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-12 py-xl-4 py-lg-4 py-md-4 py-3 text-xl-start text-lg-start text-md-start text-sm-start text-center">
                <h4 class="mb-0 pagesHeading text-capitalize">BIIB Student Council</h4>
            </div>
        </div>
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/student/biib-students-council.webp')}}" alt="studnets">
            </div>
            <div class="col-xl-12 my-2">
                <p class="mb-0 text-xl-start text-lg-start text-md-start">BIIB Student Council is a part of the Sri Balaji Society (SBS) hierarchy. We believe that students’ power has played a vital role in the progress and development of our university. It is the student council that has walked shoulder to shoulder with the management to create a conducive environment and overall development of the students. The selected body of the student council is empowered to raise the issues concerning students and work with the administration department to resolve them. Also, the student council is responsible for maintaining a friendly and focused environment on the campus.</p>
            </div>
            <div class="col-xl-12 my-2">
                <h4 class="pagesHeading text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">The Corporate Relations Team</h4>
            </div>
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/student/corporate-relations-team.webp')}}" alt="studnets">
                <p class="my-3 text-xl-start text-lg-start text-md-start"><strong>…. Team Spirit in Action</strong></p>
                <p class="text-xl-start text-lg-start text-md-start">They too joined us in the management program as students. But they were a different lot, they were full of zest and zeal and fought greater challenges and opportunities to utilize every minute of their presence on the campus. They undoubtedly are the ‘Go-Getters’ of Sri Balaji University, Pune as proved during the massive campus placement exercise undertaken by them. These well-groomed young leaders will definitely prove as an asset to any organization where they may pursue their careers because they had worked day and night exercising their minds and investing their time to draw strategies for marketing the institutes, the students, and ensuring successful campus placements despite the slow-down in the placement market globally. Because of their strong efforts, Sri Balaji University, Pune has witnessed the best Campus Placements.</p>
                <p class="text-xl-start text-lg-start text-md-start">We, the top management of Sri Balaji University, Pune congratulate these Go-Getters and wish them very successful corporate careers.</p>
            </div>
        </div>
        <div class="row mt-3 m-0">
            <div class="col-12 p-xl-0 p-lg-0 p-md-0">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    @foreach($studentcouncil as $year => $value)
                        <div class="accordion-item rounded-0 mb-2">
                            <h2 class="accordion-header" id="panelsStayOpen-heading{{$loop->index}}">
                            <button class="accordion-button rounded-0 fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-{{$loop->index}}" aria-expanded="true" aria-controls="panelsStayOpen-collapse-{{$loop->index}}">
                                BIIB Student Council ({{$year}})
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapse-{{$loop->index}}" class="accordion-collapse collapse {{ $loop->index == 0 ? 'show' : ''}}" aria-labelledby="panelsStayOpen-heading{{$loop->index}}">
                                <div class="accordion-body">
                                    @foreach($value as $data)
                                        <div class="row bg-white">
                                            <div class="col-xl-12">
                                                <img class="w-100" src="{{ $data->featured_image }}" alt="{{$data->title}}">
                                            </div>
                                            <div class="row mt-4">
                                                @if($data->president)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p class=""><strong>President : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->president}}</p>
                                                    </div>
                                                @endif
                                                @if($data->vice_president)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p><strong>Vice President : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->vice_president}}</p>
                                                    </div>
                                                @endif
                                                @if($data->placement_committee)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p><strong>Placement Committee : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->placement_committee}}</p>
                                                    </div>
                                                @endif
                                                @if($data->discipline_committee)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p><strong>Discipline Committee : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->discipline_committee}}</p>
                                                    </div>
                                                @endif
                                                @if($data->seminar_committee)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p><strong>Seminar Committee : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->seminar_committee}}</p>
                                                    </div>
                                                @endif
                                                @if($data->cultural_committee)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p><strong>Cultural Committee : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->cultural_committee}}</p>
                                                    </div>
                                                @endif
                                                @if($data->academic_committee)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p><strong>Academic Committee : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->academic_committee}}</p>
                                                    </div>
                                                @endif
                                                @if($data->system_committee)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p><strong>System Committee : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->system_committee}}</p>
                                                    </div>
                                                @endif
                                                @if($data->finance_committee)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p><strong>Treasurer : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->finance_committee}}</p>
                                                    </div>
                                                @endif
                                                @if($data->corporate_relations_committee)
                                                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                                                        <p><strong>Corporate Relations Committee : </strong></p>
                                                    </div>
                                                    <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8">
                                                        <p class="">{{$data->corporate_relations_committee}}</p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>