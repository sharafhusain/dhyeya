@extends('layouts.front')
@section('content_ui')
    <section class="mb-4" id="dhyeya-ias-udaan">
        <div class="overflow-hidden">
            <img src="{{asset('img/udaan-banner.jpg')}}" alt="image" class="img-fluid w-100">
        </div>

        <div class="text-center my-4">
            <a href="#" class="btn btn-ex-blue btn-lg py-2 rounded-1">
                <i class="fa-solid fa-download"></i>
                Download Udaan Entrance Result
            </a>
        </div>

        <div class="p-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="">
                        <h2>Admission Open for Dhyeya Udaan Programme 2023</h2>
                        <p class="fs-5 text-secondary fw-500">
                            <i class="fa-solid fa-location-dot"></i>
                            Only At Aliganj (Lucknow) Uttar Pradesh Center
                        </p>

                        <div class="card border-0 shadow-sm my-4">
                            <div class="card-body">
                                <div class="bellow-line-parent mx-auto" style="width:fit-content;">
                                    <h4 class="bellow-line-center pb-1 mx-auto fw-600">Important Dates</h4>
                                </div>
                                <ul class="my-4">
                                    <li>Registration Starts From : <span class="fw-600">18th April 2023</span></li>
                                    <li>Last Date for Registration : <span class="fw-600">10th July 2023</span></li>
                                    <li>IAS Olympiad Result : <span class="fw-600">8th August 2023</span></li>
                                    <li>Admission Starts From : <span class="fw-600">9th August 2023</span></li>
                                    <li>Classes Start From : <span class="fw-600">21st August 2023 (3pm-5:30pm)</span>
                                    </li>
                                </ul>
                                <p class="fs-5 text-secondary fw-600 text-center">
                                    IAS Olympiad Entrance Exam : 16th July 2023 (12:30 pm)
                                </p>
                            </div>
                        </div>

                        <div class="my-4">
                            <div class="bellow-line-parent mx-auto" style="width:fit-content;">
                                <h5 class="bellow-line-center pb-1 fw-600 mx-auto">Scholarship Criteria for top 10
                                    candidates</h5>
                                <h6 class="text-center mt-4">(Based on Olympiad Entrance Exam Rank)</h6>
                            </div>

                            <table class="table table-bordered table-responsive table-striped table-hover">
                                <thead class="text-bg-primary">
                                <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Olympiad Rank</th>
                                    <th scope="col">Fee Relaxation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>01</td>
                                    <td>&#x20B9; 2,15,000/- Waiver in Total Fee</td>
                                </tr>
                                <tr>
                                    <td>B</td>
                                    <td>02</td>
                                    <td>&#x20B9; 2,00,000/- Waiver in Total Fee</td>
                                </tr>
                                <tr>
                                    <td>C</td>
                                    <td>03</td>
                                    <td>&#x20B9; 1,50,000/- Waiver in Total Fee</td>
                                </tr>
                                <tr>
                                    <td>D</td>
                                    <td>04 & 05</td>
                                    <td>&#x20B9; 1,00,000/- Waiver in Total Fee</td>
                                </tr>
                                <tr>
                                    <td>E</td>
                                    <td>06 to 10</td>
                                    <td>&#x20B9; 50,000/- Waiver in Total Fee</td>
                                </tr>
                                <tr>
                                    <td>F</td>
                                    <td>11 to 20</td>
                                    <td>&#x20B9; 25,000/- Waiver in Total Fee</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="py-3 bg-body">
                        <div class="card border w-75 mx-auto">
                            <div class="card-body">
                                <div class="mb-3">
                                    <h3 class="fw-400">Scholarship Exam Registration for Admission in Udaan
                                        Programme</h3>
                                    <p class="fs-8">IAS OLYMPIAD : THINK ABOUT IAS/IPS JUST AFTER 12th - Udaan 3 Years
                                        Programme.</p>
                                </div>
                                <form action="" method="post">
                                    <div class="mb-5">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control text-muted" id="name" required>
                                    </div>
                                    <div class="mb-5">
                                        <label for="number" class="form-label">Mobile Number</label>
                                        <input type="number" class="form-control text-muted" id="number" required>
                                    </div>
                                    <div class="mb-5">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control text-muted" id="email" required>
                                    </div>
                                    <div class="mb-5">
                                        <label for="age" class="form-label">Age</label>
                                        <select class="form-select text-muted" aria-label="age" id="age">
                                            <option selected>Select Age</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                        <label for="qualification" class="form-label">Qualification</label>
                                        <select class="form-select text-muted" aria-label="qualification"
                                                id="qualification">
                                            <option selected>Select Qualification</option>
                                            <option value="12th Appearing">12th Appearing</option>
                                            <option value="12th Passed">12th Passed</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-ex-blue">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm my-4">
                <div class="card-body">
                    <div class="bellow-line-parent">
                        <h4 class="bellow-line-center fw-600 pb-2 mx-auto">About Udaan Programme</h4>
                        <p class="p-2 text-center">Udaan is a program designed to give wings to the dreams of
                            young & strong minds, who
                            have the wisdom & farsightedness of selecting one of the most prestigious & challenging
                            career of being a Civil Servant while appearing for or after having completed class 12th
                            .The program facilitates such young aspirants who carry a lot of zeal & willpower, to start
                            preparing at a young age & achieve an advantageous position to crack the exam on the very
                            first attempt itself, after their graduation.</p>
                    </div>
                </div>
            </div>

            <div class="container my-4">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="bellow-line-parent text-center">
                                    <i class="fa-solid fa-gears fs-1 my-3 text-primary"></i>
                                    <h5 class="fw-600 bellow-line-center pb-2 mx-auto">MANTRA</h5>
                                </div>
                                <ul class="my-3">
                                    <li>The selection process for this limited Seat programme would be done through
                                        the Dhyeya IAS All India Udaan Entrance Exam.
                                    </li>
                                    <li>Meritorious and Ambitious candidates would be carefully chosen and enrolled
                                        for this three stage curriculum.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="bellow-line-parent text-center">
                                    <i class="fa-solid fa-bolt-lightning fs-1 my-3 text-primary"></i>
                                    <h5 class="fw-600 bellow-line-center pb-2 mx-auto">MISSION</h5>
                                </div>
                                <ul class="my-3">
                                    <p class="m-0">Exceptional Students need Exceptional Care. Dhyeya aspires to
                                        identify,
                                        nurture and
                                        encourage the right talents at a very early stage by providing a unique and
                                        personalized method of preparation for clearing Civil Services Exam. We chalk a
                                        clear path of excellence for our students to follow and rise to the pinnacle of
                                        their chosen career.</p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <div class="bellow-line-parent text-center">
                                    <i class="fa-solid fa-cubes fs-1 my-3 text-primary"></i>
                                    <h5 class="fw-600 bellow-line-center pb-2 mx-auto">Eligibility Criteria</h5>
                                </div>
                                <ul class="my-3">
                                    <li><span class="fw-600">Age Limit:</span> Candidates must have attained the age of
                                        15
                                        years and must not have attained the age of 19 years as on 1st of July - 2023
                                        i.e.
                                        candidate must be born after 1st July 2004 and on or before 1st July 2008.
                                    </li>
                                    <li><span class="fw-600">Educational Qualification:</span> 12th Passed or Appearing
                                        from
                                        a recognized board.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-5">
                <div class="bellow-line-parent">
                    <h4 class="bellow-line-center fw-600 pb-2 mx-auto">IAS Olympiad : Syllabus</h4>
                </div>

                <div class="my-5">
                    <div class="text-center">
                        <h5><span class="text-secondary">SECTION-A:</span> OBJECTIVE TYPE</h5>
                        <h6>The Question paper shall comprise the following compulsory sections:</h6>
                    </div>
                    <div class="row g-4 my-2">
                        <div class="col"></div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <div class="bellow-line-parent">
                                        <h5 class="bellow-line-center pb-1 my-3 mx-auto">Part 1</h5>
                                    </div>
                                    <ul>
                                        <li>Current events of national & international importance</li>
                                        <li>History of India</li>
                                        <li>Geography</li>
                                        <li>Indian Polity</li>
                                        <li>Indian Economy</li>
                                        <li>General Science</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body">
                                    <div class="bellow-line-parent">
                                        <h5 class="bellow-line-center pb-1 my-3 mx-auto">Part 2</h5>
                                    </div>
                                    <ul>
                                        <li>General mental ability</li>
                                        <li>Basic numeracy (10th level)</li>
                                        <li>Logical reasoning</li>
                                        <li>English Language & Comprehension skills. (10th level)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>

                <div class="my-5 mx-3">
                    <h5 class="text-center"><span class="text-secondary">SECTION-B:</span> SUBJECTIVE TYPE</h5>
                    <div class="card border-0 shadow-sm my-4">
                        <div class="card-body">
                            <ul class="my-3">
                                <li>Questions based on Decision-Making and Problem-Solving</li>
                                <li>Essay</li>
                                <h5 class="my-3 text-center">NOTE:</h5>
                                <li>There will be four alternatives for the answer to Objective question. For each
                                    objective question of which a wrong answer has been given by the candidate
                                    one-fourth of the marks assigned to that question will be deducted as penalty.
                                </li>
                                <li>The questions will be based on 10+2 level.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="my-3 p-3 text-bg-primary rounded text-center">
                    <h4 class="fw-600">Any Query Call us </h4>
                    <div class="fs-5 fw-600 yellow">
                        <a href="tel:9506256789" class="nav-link d-inline bold-hover">9506256789</a>,
                        <a href="tel:7570009014" class="nav-link d-inline bold-hover">7570009014</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ asset('pdf/prospectus/Udaan-Prospectus.pdf') }}"
                   class="btn btn-ex-blue btn-lg py-2 rounded-1" target="_blank">
                    <i class="fa-solid fa-download"></i>
                    Download Udaan Prospectus
                </a>
            </div>

        </div>
    </section>
@endsection
