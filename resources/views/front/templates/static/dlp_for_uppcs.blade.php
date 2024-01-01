@extends('layouts.front')
@section('content_ui')
    <section id="dlp">

        <div class="px-3">
            <div class="my-5 border">
                <h4 class="text-center my-3">DLP Plan</h4>
                <table class="table table-striped table-hover table-responsive table-bordered text-center">
                    <thead class="text-bg-primary">
                    <tr>
                        <th scope="col" class="w-75">Price (&#x20B9;)</th>
                        <th scope="col"><p class="mb-0">DLP (Basic)</p>
                            <p class="mb-0">
                                <span class="text-decoration-line-through">7999</span>
                                <span>6499</span>
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
                        <td>26</td>
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

            <div class="my-3 p-3 text-bg-primary rounded text-center">
                <h4 class="fw-600">
                    For Any Query Call us
                    <a href="tel:9205184003" class="nav-link fs-5 yellow d-inline bold-hover">9205184003</a>
                </h4>
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
                        <td>WORLD HISTORY</td>
                        <td>भारतीय राज्यव्यवस्था</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>HISTORY OF MEDIEVAL INDIA	</td>
                        <td>भारतीय समाज एवं सामाजिक मुद्दे</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>HISTORY OF MODERN INDIA	</td>
                        <td>प्राचीन भारत का इतिहास</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>HISTORY OF ANCEINT INDIA</td>
                        <td>आंतरिक सुरक्षा</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>INTERNAL SECURITY</td>
                        <td>मध्यकालीन भारत का इतिहास</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>INDIAN SOCIETY AND SOCIAL ISSUE	</td>
                        <td>समकालीन विश्व</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>CONTEMPORARY WORLD	</td>
                        <td>विश्व का इतिहास</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>DISASTER MANAGEMENT	</td>
                        <td>स्वतंत्रता के पश्चात भारत</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>INDIAN ECONOMY</td>
                        <td>आधुनिक भारत का इतिहास</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>INDIA AND WORLD	</td>
                        <td>भारत और विश्व</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>ECONOMIC & SOCIAL GEOGRAPHY OF INDIA AND WORLD</td>
                        <td>पर्यावरण और पारिस्थितिकी</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>INDIA AFTER INDEPENDENCE</td>
                        <td>नीतिशास्त्र एवं सत्यनिष्ठा</td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>INDIA ART AND CULTURE</td>
                        <td>विज्ञान और प्रौद्योगिकी (मुलभुत अध्यन)</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>PHYSICAL GEOGRAPHY OF INDIA AND WORLD	</td>
                        <td>भारतीय कला और संस्कृति</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>ECOLOGY & ENVIRONMENT</td>
                        <td>जीव विज्ञान</td>
                    </tr>
                    <tr>
                        <th scope="row">16</th>
                        <td>SCIENCE AND TECHNOLOGY (FUNDAMENTALS)	</td>
                        <td>भौतिक और रसायन विज्ञान</td>
                    </tr>
                    <tr>
                        <th scope="row">17</th>
                        <td>SOCIAL JUSTICE</td>
                        <td>आपदा प्रबंधन</td>
                    </tr>
                    <tr>
                        <th scope="row">18</th>
                        <td>BIOLOGY</td>
                        <td>सामाजिक न्याय</td>
                    </tr>
                    <tr>
                        <th scope="row">19</th>
                        <td>PHYSICS & CHEMISTRY</td>
                        <td>भौतिक भूगोल विश्व भारत एवं उत्तर प्रदेश</td>
                    </tr>
                    <tr>
                        <th scope="row">20</th>
                        <td>ETHICS,INTEGRITY & APTITUDE</td>
                        <td>भारतीय संविधान एवं राज्यव्यवस्था</td>
                    </tr>
                    <tr>
                        <th scope="row">21</th>
                        <td>INDIAN POLITY  & CONSTITUTION (COMPREHENSIVE CONTENT)	</td>
                        <td>सामाजिक एवं आर्थिक भुगोल (विश्व, भारत एवं उत्तर प्रदेश)</td>
                    </tr>
                    <tr>
                        <th scope="row">22</th>
                        <td>UTTAR PRADESH COMPREHENSIVE BOOK FOR PRELIMINARY  EXAM</td>
                        <td>समग्र अवलोकन - यूपीपीसीएस (प्रारंभिक परीक्षा)</td>
                    </tr>
                    <tr>
                        <th scope="row">23</th>
                        <td>UP-PCS GENERAL STUDIES PAPER V</td>
                        <td>UP-PCS सामान्य अध्ययन पेपर-V</td>
                    </tr>
                    <tr>
                        <th scope="row">24</th>
                        <td>UP-PCS GENERAL STUDIES PAPER VI</td>
                        <td>UP-PCS सामान्य अध्ययन पेपर-VI</td>
                    </tr>
                    <tr>
                        <th scope="row">25</th>
                        <td>MASTERING GUIDE UP-PCS MAINS PAPER V & VI</td>
                        <td>MASTERING GUIDE UP-PCS मुख्य परीक्षा पेपर-V एवं VI</td>
                    </tr>
                    <tr>
                        <th scope="row">26</th>
                        <td>UPPCS DECODING ESSAY EXELLENCE</td>
                        <td>UPSC और UP-PSC: निबन्धों में उत्कृष्टता</td>
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
