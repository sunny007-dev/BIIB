<div class="placementpage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-12 py-xl-4 py-lg-4 py-md-4 py-3 text-xl-start text-lg-start text-md-start text-sm-start text-center">
                <h4 class="mb-0 pagesHeading text-capitalize">our Recruiters</h4>
            </div>
        </div>

        <div class="row g-3 py-xl-4 py-lg-4 py-md-4 py-sm-3 py-3 m-0">
            @foreach($recruiters as $data)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-6 my-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="">
                                <img class="w-100" src="{{$data->featured_image}}" alt="{{$data->name}} Img">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-2 m-0">
            <div class="col-12 p-xl-0 p-lg-0 p-md-0">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item rounded-0 mb-2">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button rounded-0 fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        IT Sector
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="col-xl-12">
                                    <div class="sortingList">
                                        <div>
                                            @foreach($itrecuriters as $key => $value)
                                                <table class="table table-bordered align-middle table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-3" colspan="2" scope="col">{{$key}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($value as $data)
                                                            <tr>
                                                                <td class="p-3 w-50">{{ $data->name }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item rounded-0 mb-2">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed rounded-0 fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Non IT Sector
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div class="col-xl-12">
                                    <div class="sortingList">
                                        <div>
                                            @foreach($nonitrecuriters as $key => $value)
                                                <table class="table table-bordered align-middle table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th class="p-3" colspan="2" scope="col">{{$key}}</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($value as $data)
                                                            <tr>
                                                                <td class="p-3 w-50">{{ $data->name }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>