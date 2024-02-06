<div class="alumnipage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/alumni/fbgroup.webp')}}" alt="alumni img">
            </div>
            <div class="col-xl-12">
                <h4 class="py-xl-4 py-lg-4 py-md-4 py-3 pagesHeading text-capitalize">Regional Groups of Alumni on FB</h4>
            </div>
        </div>
               
        <div class="row bg-white pb-5 m-0">
            <div class="col-xl-12">
                <div class="sortingList">
                    <div>
                        <table class="table table-bordered align-middle table-responsive">
                            <thead>
                                <tr>
                                    <th class="p-3" scope="col">Sr. No</th>
                                    <th class="p-3" scope="col">State</th>
                                    <th class="p-3" scope="col">Url</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($fbgroup as $data)
                                    <tr>
                                        <td class="p-3 w-25">{{ $loop->index + 1 }}</td>
                                        <td class="p-3 w-25">{{ $data->name }}</td>
                                        <td class="p-3 w-50"><a class="fb_link" href="{{ $data->url }}" target="_blank">Sri Balaji Society, Pune Corporate Citizens – Facebook</a></td>
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