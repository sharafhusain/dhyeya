@extends('layouts.front')
@section('content_ui')
    <section id="dlp">
        <div class="overflow-hidden">
            <img src="{{asset('img/dlp-banner.jpg')}}" alt="image" class="img-fluid w-100">
        </div>

        <div class="px-3">
            <div class="my-4">
                <h4>Objective :</h4>
                <p class="ms-2 fs-7">The Dhyeya DLP program has been designed to facilitate those students who are
                    preparing for the Civil
                    Services Exam but are unable to attend any Offline or Online Classroom programs, due to location or
                    work commitments. It is also relevant for those aspirants who rely on self-study but require
                    top-notch study material and evaluation tools to succeed in cracking the exam.</p>
            </div>

            <div class="my-4">
                <h4>Key Features :</h4>
                <ul class="fs-7">
                    <li>Availability of Study material / Books / Periodicals at the doorstep.</li>
                    <li>Focus on the Current Affairs and wider coverage on Static portion of General Studies.</li>
                    <li>Facility to gauge the performance remotely and ensure constant improvements.</li>
                    <li>Academic support for doubt clearing as well as Mentorship facility.</li>
                    <li>Option to be a part of the acclaimed Dhyeya PMI (Prelims, Mains and Interview) program.</li>
                    <li>Choice to select the optional course along with the main course</li>
                </ul>
            </div>

            <div class="my-3 p-3 text-bg-primary rounded text-center">
                <h4 class="fw-600">
                    For Any Query Call us
                    <a href="tel:9205184003" class="nav-link fs-5 yellow d-inline bold-hover">9205184003</a>
                </h4>
            </div>

            <div class="my-4">
                <h4 class="text-center my-4">:: Product Variants ::</h4>
                <div class="row g-4">
                    <div class="col-md-12">
                        <a class="btn btn-primary w-100 rounded-1 mb-2" data-bs-toggle="collapse" href="#dlp1"
                           role="button" aria-expanded="false" aria-controls="dlp1">
                            DLP Basic Details <i class="fa-solid fa-caret-down"></i>
                        </a>
                        <div class="collapse show" id="dlp1">
                            <div class="card border-0 shadow-sm card-body">
                                <div class="my-2">
                                    <h6>Books</h6>
                                    <p class="fs-7 ms-2">DLP basic contains a Set of 23 high quality Books that are
                                        specially designed to cover all the contents available in the Standard books,
                                        NCERTs, Magazines and Journals that completely carter to the needs of any Civil
                                        Service Aspirant. Most of the books are printed in colour with beautiful
                                        illustrations and are supported with QR code links, which can be scanned to view
                                        the video content available in various platforms. The crisp contents of the
                                        books are written in a lucid way and covers every topic of the IAS and PCS
                                        Syllabus, thereby eliminating the requirement of any other study material.</p>
                                </div>

                                <div class="my-2">
                                    <h6>Perfect Seven Magazine</h6>
                                    <p class="fs-7 ms-2">The role of current affairs has tremendously increased in all
                                        the subjects of General Studies like Economy, Polity, Science & Tech,
                                        International Relations, and Environment etc. Generally, the Students rely on
                                        monthly magazines available in the market. However these Magazines are printed
                                        to cater to the needs of one day exams also, so they are more factual in nature
                                        which does not serve the special requirement of Civil Services Exam. As they are
                                        compilations of mere factual information while the exam demands a deeper
                                        understanding of concepts and its analysis.</p>
                                    <p class="fs-7 ms-2">One more problem with these magazines is that the information
                                        provided by them is one month old and thus the students are unable to match the
                                        pace with the newspaper. Along with this, the student gets flooded with a
                                        month's information all at once resulting in burden and boredom.</p>
                                    <p class="fs-7 ms-2">
                                        The solution to the above problem lies in the Fortnightly magazine "PERFECT-7"
                                        published by Dhyeya IAS and is based on current affairs to cater to the special
                                        requirement of the Civil Services Exam. Analytical compilation is done in a
                                        structured manner, of current events of a fortnight, from different sources like
                                        The Hindu, Indian Express, Economic Times, PIB, etc. This contains factual
                                        information, articles, essays & model answers in merely 50-60 pages which makes
                                        it feasible and a viable option for the students.</p>
                                </div>

                            </div>
                        </div>
                    </div>
{{--                    <div class="col-md-6">--}}
{{--                        <a class="btn btn-primary w-100 rounded-1 mb-2" data-bs-toggle="collapse" href="#dlp2"--}}
{{--                           role="button" aria-expanded="false" aria-controls="dlp2">--}}
{{--                            DLP Advanced Details <i class="fa-solid fa-caret-down"></i>--}}
{{--                        </a>--}}
{{--                        <div class="collapse show" id="dlp2">--}}
{{--                            <div class="card border-0 shadow-sm card-body">--}}
{{--                                <p class="fs-7">All the Features of DLP Basic (Plus) PMI</p>--}}
{{--                                <div class="my-2">--}}
{{--                                    <h6>PMI</h6>--}}
{{--                                    <p class="fs-7 ms-2">PMI tool has been designed to provide the experience of--}}
{{--                                        appearing in the UPSC exam for Prelims, Mains and Interview right from the--}}
{{--                                        beginning of an aspirant’s preparation journey with us. This exercise would be--}}
{{--                                        repeated 12 times and with every cycle the aspirant would gain more confidence--}}
{{--                                        to crack the actual exam. In this program, subject wise tests based on the NCRT--}}
{{--                                        books, are created to evaluate the fundamental knowledge of the UPSC General--}}
{{--                                        Studies syllabus.</p>--}}
{{--                                </div>--}}

{{--                                <div class="my-2">--}}
{{--                                    <h6>This is done in two phases:</h6>--}}
{{--                                    <ul>--}}
{{--                                        <li class="fs-7 ms-2">Phase 1 – covers NCRTs from class 6th to 10th, leading to--}}
{{--                                            the development of basic understanding of concepts.--}}
{{--                                        </li>--}}
{{--                                        <li class="fs-7 ms-2">--}}
{{--                                            Phase 2 – covers NCRTs of 11th and 12th class, focusing on the in-depth--}}
{{--                                            understanding of the content.--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <p class="fs-7 ms-2">--}}
{{--                                        A student would have to contest with all the Dhyeya and outside students who--}}
{{--                                        subscribe to this programme, at each level to clear the cut-off marks to finally--}}
{{--                                        succeed. Students would be given objective feedback to improve their subject--}}
{{--                                        score. Once the student reaches the interview level, they will receive--}}
{{--                                        constructive feedback on how to improve their personality in order to clear the--}}
{{--                                        interview round of the Civil Services.</p>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="my-5 border">
                <h4 class="text-center my-3">DLP Plan</h4>
                <table class="table table-striped table-hover table-responsive table-bordered text-center">
                    <thead class="text-bg-primary">
                    <tr>
                        <th scope="col" class="w-75">Price (&#x20B9;)</th>
                        <th scope="col"><p class="mb-0">DLP (Basic)</p>
                            <p class="mb-0">
                                <span class="text-decoration-line-through">7599</span>
                                <span>5999</span>
                            </p></th>
                    </tr>
                    </thead>
                    <tbody class="fs-7">
                    <tr>
                        <th scope="col" class="w-75">Features</th>
                        <th scope="col"></th>
                    </tr>
                    <tr>
                        <td>Medium : Hindi & Englsih</td>
                        <td class="fw-bold">&check;</td>
                    </tr>
                    <tr>
                        <td>Books</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td>Perfect Seven Magazine ( Hard copy 12 months + Soft Copy 12 months )</td>
                        <td class="fw-bold">&cross;</td>
                    </tr>
                    <tr>
                        <td>PMI</td>
                        <td class="fw-bold">&cross;</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <h3 class="text-center">Dhyeya IAS DLP Vs Others</h3>

            <div class="my-5 border">
                <h4 class="text-center my-3">Dhyeya Distance Learning Plan (Comparison)</h4>
                <table class="table table-striped table-hover table-responsive table-bordered text-center">
                    <thead class="text-bg-primary">
                    <tr>
                        <th scope="col" class="w-75">Features</th>
                        <th scope="col">Dhyeya</th>
                        <th scope="col">Others</th>
                    </tr>
                    </thead>
                    <tbody class="fs-7">
                    <tr>
                        <td>Medium : Hindi & Englsih</td>
                        <td>Yes</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Books</td>
                        <td>24</td>
                        <td>6~10</td>
                    </tr>
                    <tr>
                        <td>Perfect Seven Magazine ( Hard copy 12 months + Soft Copy 12 months )</td>
                        <td>Yes</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>PMI</td>
                        <td>Yes</td>
                        <td>No</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="my-5 border">
                <h4 class="text-center my-4">Book List</h4>
                <table class="table table-striped table-hover table-responsive table-bordered text-center">
                    <thead>
                    <tr class="text-bg-dark fs-5">
                        <th scope="col"></th>
                        <th scope="col">English Medium Book Details</th>
                        <th scope="col">हिंदी माध्यम पुस्तक विवरण</th>
                    </tr>
                    <tr class="text-bg-primary">
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">शीर्षक</th>
                    </tr>
                    </thead>
                    <tbody class="fs-7">
                    <tr>
                        <th scope="row">1</th>
                        <td>Ethics, Integrity & Aptitude</td>
                        <td>नीतिशास्त्र अवं सत्निष्ठा</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Biology</td>
                        <td>जीव विज्ञान</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Physics & Chemistry</td>
                        <td>भौतिक विज्ञान और रसायन विज्ञान</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Physical Geography of India and world</td>
                        <td>भारत और विश्व का भौतिक भूगोल</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Disaster Management</td>
                        <td>आपदा प्रबंधन</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Ecology & Environment</td>
                        <td>पर्यावरण और परिस्तिथि</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>History of Ancient India</td>
                        <td>प्राचीन भारत का इतिहास</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Indian Art and Culture</td>
                        <td>भारतीय कला और संस्कृति</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>World History</td>
                        <td>विश्व का इतिहास</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Internal Security</td>
                        <td>आंतरिक सुरक्षा</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Indian Society & Social Issues</td>
                        <td>भारतीय समाज और सामाजिक मुद्दे</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>History of Medieval India</td>
                        <td>मध्यकालीन का इतिहास</td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>History of Modern India</td>
                        <td>आधुनिक भारत का इतिहास</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>Contemporary World</td>
                        <td>समकालीन विश्व</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>Science & Technology Fundamental (New)</td>
                        <td>विज्ञान और प्रोद्योगिकी पार्ट-1</td>
                    </tr>
                    <tr>
                        <th scope="row">16</th>
                        <td>Science & Technology Advance (New)</td>
                        <td>विज्ञान और प्रोद्योगिकी पार्ट-2</td>
                    </tr>
                    <tr>
                        <th scope="row">17</th>
                        <td>Indian Economy - Complete Study (New)</td>
                        <td>भारतीय अर्थव्यवस्था</td>
                    </tr>
                    <tr>
                        <th scope="row">18</th>
                        <td>India & World</td>
                        <td>भारत और विश्व</td>
                    </tr>
                    <tr>
                        <th scope="row">19</th>
                        <td>Economic & Social Geography of India and world</td>
                        <td>भारत और विश्व का आर्थिक एवं सामाजिक भूगोल</td>
                    </tr>
                    <tr>
                        <th scope="row">20</th>
                        <td>Governance</td>
                        <td>शासन</td>
                    </tr>
                    <tr>
                        <th scope="row">21</th>
                        <td>India After Independence</td>
                        <td>स्वतंत्र के पश्चात भारत</td>
                    </tr>
                    <tr>
                        <th scope="row">22</th>
                        <td>Indian Polity & Constitution</td>
                        <td>भारतीय राज्य व्यवस्था</td>
                    </tr>
                    <tr>
                        <th scope="row">23</th>
                        <td>Social Justice</td>
                        <td>सामाजिक न्याय</td>
                    </tr>
                    <tr>
                        <th scope="row">24</th>
                        <td>Decoding Essay Excellence</td>
                        <td>निबन्धों में उत्कृष्टता</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="my-3 p-3 text-bg-primary rounded text-center">
                <h4 class="fw-600">
                    For Any Query Call us
                    <a href="tel:9205184003" class="nav-link fs-5 yellow d-inline bold-hover">9205184003</a>
                </h4>
            </div>

        </div>

    </section>
@endsection
