<div class="industryPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">   
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/industry/internship.jpg')}}" alt="about">
            </div>
        </div>
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <h4 class="my-xl-4 my-lg-4 my-md-4 my-3 pagesHeading text-capitalize">Internship - a step ahead in corporate training</h4>
                <p>Our students earn their management degrees rather than just completing a theoretical MBA program. Each student of Sri Balaji University, Pune, compulsorily goes through stringent practical-oriented company project studies (CPS). The training program is for two months which is at the end of the first year of the course or as decided by the institute. The project is in-sync with the ongoing process of the company. The company project studies (CPS) can be undertaken in any good company in any part of the country. Based on the student’s exceptional performance, the companies may reward students by offering them a ‘Pre-Placement Offer’.</p>
                <p>The company project studies take place after the completion of students’ first and second semesters. Students pursuing courses in the Marketing, Finance, and International Business stream of management will undertake their project work from 01st May to 30th June, while student managers of the Analytics stream of management will undertake their projects from 01st August to 31st October in the academic year.</p>
                <p>Apart from project studies, students are encouraged to undertake rural project studies for the duration of two months. The rural project study takes place in the fourth semester of their course preferably after the campus placement. Sri Balaji University, Pune, students are a step ahead as compared to their counterparts studying in various other universities across India.</p>
            </div>
        </div>
        
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <div class="sortingList">
                    <div>
                        @foreach($internship as $key => $value)
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