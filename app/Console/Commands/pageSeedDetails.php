<?php

//Seeder for $current Affairs pages that can never be changed after creation and only be used for uploading pdfs attachments
//please go to sidepanel and change the route parameter to newly created post id of the following current affairs.

return [
//    [
//        "hi" => [
//            "title" => "होम",
//            "excerpt" => "होम",
//        ],
//        "en" => [
//
//            "title" => "Home",
//            "excerpt" => "this is home"
//        ],
//        "slug" => "home",
//        "status" => "active",
//        "keywords" => "home, होम"
//    ],
//
//    ######################################################################################################################
//
    [
        "hi" => [
            "title" => "हमारे बारे में",
            "excerpt" => "tहमारे बारे में"
        ],
        "en" => [

            "title" => "About Us",
            "excerpt" => "this is about"
        ],
        "slug" => "about-us",
        "status" => "active",
        "keywords" => "about, हमारे बारे मे",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "about-us",
            "status" => "active",
            "hi" => [
                "title" => "About Us",
                "description" => '<div class="d-flex flex-column my-4">
    <h3 class="mb-3 sidebar-text-bellow-line">हमारा लक्ष्य (Our Mission)</h3>
    <p class="text-grey">हमारा लक्ष्य छात्रों में प्रतिस्पर्धात्मक दृष्टिकोण का विकास करना और उसे परिपोषित करना है /हम गुणवत्तापूर्ण शिक्षण के माध्यम से छात्रों को सशक्त बनाते हैं जिससे वो सदैव जीवन में एक कदम आगे रहें/ध्येय आईएएस में हम इस तथ्य में विश्वास रखते हैं की प्रतिभाएं जन्मजात नहीं होती बल्कि उन्हें बनाया जाता है/प्रतिभाएं गुणवत्तापूर्ण मार्गदर्शन और सतत अभ्यास के माध्यम से एवं दृढ़ प्रतिबद्धता, दृढ़ संकल्प के साथ बनाया जा सकता है/हम आपको भविष्य के लिए तैयार करते हैं |</p>
</div>

<div class="d-flex flex-column my-4">
    <h3 class="mb-3 sidebar-text-bellow-line">ध्येय एवं उद्देश्य (Aims & Objectives)</h3>
    <p class="text-grey">ध्येय आईएएस की स्थापना के समय से ही हमने व्यवसायीकरण की संस्कृति से प्रभावित हुए बिना उन प्रतिभाशाली छात्रों को सिविल सेवा के लिए तैयार किया है जो प्रायः समाज के अत्यंत पिछड़े क्षेत्रों से सम्बन्ध रखते हैं किन्तु वे इस गौरवशाली परीक्षा के लिए स्वयं को तैयार करना चाहते है |</p>

    <div class="m-2">
        <h4>रणनीति (Strategy)</h4>
        <p class="text-grey">उम्मीदवारों को परीक्षा के प्रत्येक स्तर पर अर्थात प्रारम्भिक परीक्षा, मुख्या परीक्षा एवं साक्षात्कार के लिए एक सटीक और अलग रणनीति और योजना तैयार करने में सहायता करना |</p>
    </div>
    <div class="m-2">
        <h4>कक्षा कार्यक्रम (Classroom Programme)</h4>
        <p class="text-grey">उम्मीदवारों को विषय के स्पष्ट बुनियादी सिद्धांतों को विकसित करने में सहायता करने के लिए, अपने संबंधित क्षेत्रों में विशेषज्ञों द्वारा कक्षा कार्यक्रम |</p>
    </div>
    <div class="m-2">
        <h4>समाज (Society)</h4>
        <p class="text-grey">उन उम्मीदवारों पर ध्यान केंद्रित करना जो समाज के कमजोर वर्ग से हैं और उन्हें समाज की मुख्यधारा का हिस्सा बनने में मदद करना है |</p>
    </div>
    <div class="m-2">
        <h4>आर्थिक रूप से (Economically)</h4>
        <p class="text-grey">समाज के आर्थिक रूप से कमजोर वर्गों से संबंधित लोगों के लिए हर संभव सहायता प्रदान करना |</p>
    </div>
</div>

<div class="d-flex flex-column my-4">
    <h3 class="mb-3 sidebar-text-bellow-line">प्रणाली एवं पद्वति (Methodology and Mechanism)</h3>
    <p class="text-grey">विगत वर्षों के सिविल सेवा परीक्षा के परिणाम यह प्रदर्शित करते हैं की संस्थान योग्य छात्रों को उनके स्वप्नों को साकार करने में सदैव सहायक रही है |</p>

    <div class="m-2 text-grey">
        <li>काउंसिलिंग</li>
        <li>कक्षा प्रशिक्षण कार्यक्रम</li>
        <li>टेस्ट मूल्यांकन कार्यक्रम</li>
        <li>अध्ययन सामग्री विकास और सुधार</li>
        <li>प्रशासनिक प्रबंधन और मानव संसाधन विकास केंद्र</li>
        <li>दूरस्थ शिक्षा और शिक्षण कार्यक्रम</li>
    </div>
</div>

<div class="d-flex flex-column my-4">
    <h3 class="mb-3 sidebar-text-bellow-line">ध्येय आईएएस ही क्यों? (Why Dhyeya IAS?)</h3>
    <p class="text-grey">ध्येय आईएएस में हम मिसाल पेश करते हुए आगे बढ़ने में विश्वास रखते हैं /हमारी हमारी शक्ति है हमारा लगातार परिणामोन्मुख प्रदर्शन /यह हमारी कटिबद्धता, प्रतियोगितात्मकता एवं सततता का परिणाम है जिसने विगत 10 वर्षों से ध्येय आईएएस को केंद्र एवं राज्य स्तरीय सिविल सेवा परीक्षा संस्थानों में भारत का नंबर 1 संस्थान बनाये रखा है</p>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>उदाहरण के द्वारा नेतृत्व</h5>
                    <p class="text-grey">DhyeyaIAS में, हम उदाहरण के द्वारा नेतृत्व करने में विश्वास करते हैं। हमारी ताकत हमारा लगातार परिणामोन्मुख प्रदर्शन है। यह हमारी प्रतिबद्धता, प्रतिस्पर्धात्मकता और वितरण में निरंतरता है जिसने ध्येयआईएएस को पिछले 10 वर्षों में सिविल सेवाओं और राज्य सेवाओं के लिए भारत का नंबर 1 संस्थान बना दिया है।</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>प्रतिभा को पोषित करना और आकार देना</h5>
                    <p class="text-grey">क्योंकि, आपकी प्रतिभा निर्धारित करती है कि आप क्या कर सकते हैं। आपकी प्रेरणा निर्धारित करती है कि आप कितना करना चाहते हैं, लेकिन आपका दृष्टिकोण निर्धारित करता है कि आप इसे कितना अच्छा करते हैं |</p>
                    <p class="text-grey">ध्येय आईएएस में, हमारा उद्देश्य छात्र की सामर्थ्य बढ़ाने और वांछित क्षमताओं का निर्माण करना है। क्षमता एवं योग्यता दोनों ही महत्वपूर्ण है और इनके संवर्धन में विभिन्न रणनीतियों का समावेश है। हमारी विशेषज्ञ टीम आपको साधारण चीजों को असाधारण अवसरों में बदलने में मदद करती है |</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>क्षमता बढ़ाना और क्षमता निर्माण करना</h5>
                    <p class="text-grey">DhyeyaIAS में, हमारा उद्देश्य छात्रों की क्षमता को बढ़ाना और वांछित क्षमताओं का निर्माण करना है। प्रत्येक महत्वपूर्ण है और इसमें रणनीतियों का एक अलग सेट शामिल है। हमारी विशेषज्ञ टीम आपको सामान्य चीज़ों को असाधारण अवसरों में बदलने में मदद करती है।</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>सर्वश्रेष्ठ अध्ययन सामग्री</h5>
                    <p class="text-grey">ध्येय आईएएस में, हमारा मार्गदर्शक सिद्धांत "अध्ययन का उद्देश्य धनार्जन नहीं वरन सीखना होना चाहिए "। हम भी अपने छात्रों के साथ सीखते हैं और विकसित होते हैं। जितना अधिक हम सीखेंगे उतना ही हम छात्र की आवश्यकता को समझेंगे । इस विचार और विचारधारा के साथ, हम प्रासंगिक अध्ययन सामग्री तैयार एवं विकसित करते हैं |</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>अकादमिक सहयोगियों की समर्पित टीम</h5>
                    <p class="text-grey">हम छात्रों को संलग्न करने और विकसित करने के लिए प्रोत्साहित करते हैं। क्योंकि, हम सभी के पास समान प्रतिभा नहीं हो सकती है, लेकिन हम सभी को सीखने और प्रदर्शन करने के बराबर अवसर होने चाहिए। इसलिए, हम आपको दिन रात अकादमिक सहायता की सुविधा प्रदान करते हैं। हमारे पास अकादमिक एसोसिएट्स की एक समर्पित टीम जिनके पास सिविल सेवा के साक्षात्कार में 2-3 बार सम्मिलित होने का अनुभव है, आपके संदेहों को दूर करने एवं सम्बद्ध विषयों पर चर्चा के द्वारा आपका उचित मार्गदर्शन करते हैं |</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>अध्यापक</h5>
                    <p class="text-grey">विद्यार्थी जुड़ाव - कोई भी महत्वपूर्ण सीख महत्वपूर्ण रिश्ते के बिना नहीं हो सकती। हमारे पास ऐसे शिक्षक हैं जो जितना पढ़ाते हैं उससे कहीं अधिक सीखते हैं। सीखने की प्रक्रिया में, हमारे संकाय छात्रों के साथ जुड़ते हैं और स्थायी संबंध बनाते हैं। इसका उद्देश्य प्रभावी छात्र-शिक्षक भागीदारी विकसित करना और सीखना आसान बनाना है।</p>
                    <p class="text-grey">समाज के कमजोर वर्ग के उम्मीदवारों पर ध्यान केंद्रित करना और उन्हें समाज की मुख्यधारा का हिस्सा बनने में मदद करना।</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>नेतृत्व और प्रबंधन की गुणवत्ता का विकास</h5>
                    <p class="text-grey">शिक्षक - छात्र सम्बन्ध - समुचित शिक्षण के लिए एक अर्थपूर्ण सम्बन्ध आवश्यक है । हमारे पास ऐसे शिक्षक हैं जो सिखाए जाने से ज्यादा सीखने में विश्वास रखते हैं । सीखने की प्रक्रिया में, हमारे शिक्षक छात्रों के साथ शामिल होते है और सम्बन्ध का निर्माण करते है । इस प्रक्रिया के पीछे जो सोच है उसका उद्देश्य छात्र-शिक्षक भागीदारी विकसित करना और सीखने की प्रक्रिया को आसान बनाना है |</p>
                    <p class="text-grey">समाज के कमजोर वर्ग से संबंधित अभ्यर्थियों की सहायता और उन्हें समाज की मुख्यधारा का हिस्सा बनने में मदद करना हमारा परम उद्देश्य रहा है |</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>मुख्य परीक्षा उत्तर लेखन कौशल</h5>
                    <p class="text-grey">ज्ञान की अपनी अहमियत है किन्तु सबसे महत्त्वपूर्ण है आप अपने ज्ञान को कैसे प्रदर्शित करते हैं जो छात्र मुख्य परीक्षा उत्तीर्ण नहीं कर पाते हैं ऐसा नहीं है की उनके पास उत्तीर्ण छात्रों से काम ज्ञान है / लिखने का तात्पर्य केवल अपने विचारों को लेखनीबद्ध करना मात्र नहीं है बल्कि यह एक कला है जिसे सतत प्रयास एवं उचित मार्गदर्शन के माध्यम से सुधारा जा सकता है |</p>
                </div>
            </div>
        </div>

    </div>
</div>'
            ],
            "en" => [
                "title" => "About Us",
                "description" => '<div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Our Mission</h3>
                    <p class="text-grey px-3">Our aim is to develop & nurture competitive attitude amongst student. We
                        empower you to stay ahead a step in life by offering qualitative teaching. At DhyeyaIAs, we believe that
                        “Geniuses are made, not born”. They can be made with sheer commitment, dogged determination
                        in tandem with qualitative guidance and practice. We prepare you for the future.</p>
                </div>

                <div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Aims and Objectives</h3>
                    <p class="text-grey">Since the establishment of Dhyeya IAS, we have followed the modest culture of
                        not commercializing our results but for the sole inspiration of novices we present a list of
                        selected candidates belonging to humble background yet achieving laurels in this most
                        prestigious exam in last pages.</p>

                    <div class="m-2">
                        <h4>Strategy</h4>
                        <p class="text-grey">To assist the aspirants to frame an accurate and separate strategy and
                            plan at every level of examination, i.e., preliminary, main and Interview.</p>
                    </div>
                    <div class="m-2">
                        <h4>Classroom Programme</h4>
                        <p class="text-grey">Classroom Programme by the experts of their respective field, in order to
                            assist aspirants to develop the clear and fundamentals of the subject.</p>
                    </div>
                    <div class="m-2">
                        <h4>Society</h4>
                        <p class="text-grey">To focus at the aspirants belongs to the weaker section of the society and
                            help them to be the part of the mainstream of the society.</p>
                    </div>
                    <div class="m-2">
                        <h4>Economically</h4>
                        <p class="text-grey">To provide every assistance possible for those who belongs to the
                            economically weaker sections of the society.</p>
                    </div>
                </div>

                <div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Methodology and Mechanism</h3>
                    <p class="text-grey">The institute has been very successful in making potential aspirants
                        realize their dreams which is evident from the success stories of the previous years.</p>

                    <div class="m-2 text-grey">
                        <li>Counseling</li>
                        <li>Class Training Programme</li>
                        <li>Test Evaluation Programme</li>
                        <li>Study Material Development and Improvement</li>
                        <li>Administrative Management and Human Resources Development Centre</li>
                        <li>Distance Education and Learning Programme</li>
                    </div>
                </div>

                <div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Why Dhyeya IAS</h3>
                    <p class="text-grey">The institute has been very successful in making potential aspirants
                        realize their dreams which is evident from the success stories of the previous years.</p>

                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Lead By Example</h5>
                                    <p class="text-grey">At DhyeyaIAS, we believe in leading by example. Our
                                        strength is our consistent result-oriented performance. It is our commitment,
                                        competitiveness and consistency in delivery that has made DhyeyaIAS India’s No.1
                                        Institute for Civil Services and State Services since past 10 years.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Nurturing and Shaping Talent</h5>
                                    <p class="text-grey">Because, your Talent determines what you can do.
                                        Your Motivation determines how much you are willing to do, but your Attitude
                                        determines how well you do it. Success comes when you learn the art of balancing
                                        your ATM.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Enhancing Capacity and building Capability</h5>
                                    <p class="text-grey">At DhyeyaIAS, our objective is to enhance student’s
                                        capacity and build desired capabilities. Each one is important and involves
                                        different set of strategies. Our expert team helps you to transform ordinary
                                        things into extraordinary opportunity.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Best Study material</h5>
                                    <p class="text-grey">At DhyeyaIAS, our guiding principle is “don’t study
                                        to earn, rather study to learn”. We, too, learn and grow th our Students. The
                                        more we learn the better we understand student’s requirement. With this idea
                                        and ideology, we develop and design relevant study materials.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Dedicated Team of Academic associates</h5>
                                    <p class="text-grey">We encourage Students to engage and evolve. Because,
                                        all of us may not have equal talent but all of us must have equal opportunity to
                                        learn and perform. Therefore, we get you available the round the clock facility
                                        of Academic help. We have dedicated team of Academic Associates – people who
                                        appeared in interview 2-3 times, to demolish your doubts and discuss with
                                        relevant subject.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Teacher</h5>
                                    <p class="text-grey">Student bonding – No significant learning can occur
                                        without a significant relationship. We have teachers who learn more than they
                                        teach. In the process of learning, our faculty involves with Students and form
                                        everlasting bonding. The idea is to develop effective Student-Teacher
                                        involvement and make learning easy.</p>
                                    <p class="text-grey">To focus at the aspirants belongs to the weaker
                                        section of the society and help them to be the part of the mainstream of the
                                        society.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Art of Writing Mains Answer</h5>
                                    <p class="text-grey">Knowledge, of course, matters, but what matters most
                                        is how you present your knowledge on paper. Those who don’t able to qualify
                                        Mains Exam doesnt possess iota of less knowledge than who qualify. Writing is
                                        not merely penning down your thoughts. Rather, it is an art, which can be
                                        improved by focused guidance and with constant practice.</p>
                                    <p class="text-grey">How to develop Emotional and Intelligence
                                        quotient.</p>
                                    <p class="text-grey">Use of cutting Edge technologies.</p>
                                    <a href="https://www.dhyeyaias.com/centers" class="nav-link bold-hover">Pan India Centre Available.</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>',
            ]
        ]
    ],
//    ######################################################################################################################
    [
        "en" => [
            "title" => "Our Mission",
            "excerpt" => "Our aim is to develop & nurture competitive attitude amongst student. We empower you to stay ahead a step in life by offering qualitative teaching. At DhyeyaIAs, we believe that “Geniuses are made, not born”. They can be made with sheer commitment, dogged determination in tandem with qualitative guidance and practice. We prepare you for the future.",
        ],
        "hi" => [

            "title" => "हमारा विशेष कार्य (Our Mission)",
            "excerpt" => "हमारा उद्देश्य छात्रों के बीच प्रतिस्पर्धी रवैया विकसित करना और उसका पोषण करना है। हम आपको गुणात्मक शिक्षण प्रदान करके जीवन में एक कदम आगे रहने के लिए सशक्त बनाते हैं। DhyeyaIAS में, हम मानते हैं कि 'परतिभाएं बनाई जाती हैं, पैदा नहीं होतीं' । इन्हें गुणात्मक मार्गदर्शन और अभ्यास के साथ पूर्ण प्रतिबद्धता, दृढ़ संकल्प के साथ बनाया जा सकता है। हम आपको भविष्य के लिए तैयार करते हैं।",
        ],
        "slug" => "about-us/our-mission",
        "status" => "active",
        "keywords" => "our-mission",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "about-us/our-mission",
            "status" => "active",
            "hi" => [
                "title" => "Our Mission",
                "description" => '<div class="d-flex flex-column my-4">
    <h3 class="mb-3 sidebar-text-bellow-line">हमारा लक्ष्य (Our Mission)</h3>
    <p class="text-grey px-3">हमारा लक्ष्य छात्रों में प्रतिस्पर्धात्मक दृष्टिकोण का विकास करना और उसे परिपोषित करना है /हम गुणवत्तापूर्ण शिक्षण के माध्यम से छात्रों को सशक्त बनाते हैं जिससे वो सदैव जीवन में एक कदम आगे रहें/ध्येय आईएएस में हम इस तथ्य में विश्वास रखते हैं की प्रतिभाएं जन्मजात नहीं होती बल्कि उन्हें बनाया जाता है/प्रतिभाएं गुणवत्तापूर्ण मार्गदर्शन और सतत अभ्यास के माध्यम से एवं दृढ़ प्रतिबद्धता, दृढ़ संकल्प के साथ बनाया जा सकता है/हम आपको भविष्य के लिए तैयार करते हैं |</p>
</div>',
            ],
            "en" => [
                "title" => "Our Mission",
                "description" => '<div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Our Mission</h3>
                    <p class="text-grey px-3">Our aim is to develop & nurture competitive attitude amongst student. We
                        empower you to stay
                        ahead a step in life by offering qualitative teaching. At DhyeyaIAs, we believe that
                        “Geniuses are made, not born”. They can be made with sheer commitment, dogged determination
                        in tandem with qualitative guidance and practice. We prepare you for the future.</p>
                </div>',
            ]
        ]
    ],
//######################################################################################################################
    [
        "en" => [
            "title" => "Aims and Objectives",
            "excerpt" => "Since the establishment of Dhyeya IAS, we have followed the modest culture of
                        not commercializing our results but for the sole inspiration of novices we present a list of
                        selected candidates belonging to humble background yet achieving laurels in this most
                        prestigious exam in last pages.",
        ],
        "hi" => [

            "title" => "लक्ष्य और उद्देश्य (Aims and Objectives)",
            "excerpt" => "ध्येय आईएएस की स्थापना के बाद से, हमने अपने परिणामों का व्यावसायीकरण न करने की विनम्र संस्कृति का पालन किया है, लेकिन नौसिखियों की एकमात्र प्रेरणा के लिए, हम अंतिम पृष्ठों में इस सबसे प्रतिष्ठित परीक्षा में ख्याति प्राप्त करने वाले विनम्र पृष्ठभूमि से संबंधित चयनित उम्मीदवारों की एक सूची प्रस्तुत करते हैं।",

        ],
        "slug" => "about-us/aims-and-objectives",
        "status" => "active",
        "keywords" => "aims-and-objectives",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "about-us/aims-and-objectives",
            "status" => "active",
            "hi" => [
                "title" => "Aims and Objectives",
                "description" => '<div class="d-flex flex-column my-4">
    <h3 class="mb-3 sidebar-text-bellow-line">ध्येय एवं उद्देश्य (Aims & Objectives)</h3>
    <p class="text-grey">ध्येय आईएएस की स्थापना के समय से ही हमने व्यवसायीकरण की संस्कृति से प्रभावित हुए बिना उन प्रतिभाशाली छात्रों को सिविल सेवा के लिए तैयार किया है जो प्रायः समाज के अत्यंत पिछड़े क्षेत्रों से सम्बन्ध रखते हैं किन्तु वे इस गौरवशाली परीक्षा के लिए स्वयं को तैयार करना चाहते है |</p>

    <div class="m-2">
        <h4>रणनीति (Strategy)</h4>
        <p class="text-grey">उम्मीदवारों को परीक्षा के प्रत्येक स्तर पर अर्थात प्रारम्भिक परीक्षा, मुख्या परीक्षा एवं साक्षात्कार के लिए एक सटीक और अलग रणनीति और योजना तैयार करने में सहायता करना |</p>
    </div>
    <div class="m-2">
        <h4>कक्षा कार्यक्रम (Classroom Programme)</h4>
        <p class="text-grey">उम्मीदवारों को विषय के स्पष्ट बुनियादी सिद्धांतों को विकसित करने में सहायता करने के लिए, अपने संबंधित क्षेत्रों में विशेषज्ञों द्वारा कक्षा कार्यक्रम |</p>
    </div>
    <div class="m-2">
        <h4>समाज (Society)</h4>
        <p class="text-grey">उन उम्मीदवारों पर ध्यान केंद्रित करना जो समाज के कमजोर वर्ग से हैं और उन्हें समाज की मुख्यधारा का हिस्सा बनने में मदद करना है |</p>
    </div>
    <div class="m-2">
        <h4>आर्थिक रूप से (Economically)</h4>
        <p class="text-grey">समाज के आर्थिक रूप से कमजोर वर्गों से संबंधित लोगों के लिए हर संभव सहायता प्रदान करना |</p>
    </div>
</div>',
            ],
            "en" => [
                "title" => "Aims and Objectives",
                "description" => '<div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Aims and Objectives</h3>
                    <p class="text-grey">Since the establishment of Dhyeya IAS, we have followed the modest culture of
                        not commercializing our results but for the sole inspiration of novices we present a list of
                        selected candidates belonging to humble background yet achieving laurels in this most
                        prestigious exam in last pages.</p>

                    <div class="m-2">
                        <h4>Strategy</h4>
                        <p class="text-grey">To assist the aspirants to frame an accurate and separate strategy and
                            plan at every level of examination, i.e., preliminary,, main and Interviews.</p>
                    </div>
                    <div class="m-2">
                        <h4>Classroom Programme</h4>
                        <p class="text-grey">Classroom Programme by the experts of their respective field, in order to
                            assist aspirants to develop the clear and fundamentals of the subject.</p>
                    </div>
                    <div class="m-2">
                        <h4>Society</h4>
                        <p class="text-grey">To focus at the aspirants belongs to the weaker section of the society and
                            help them to be the part of the mainstream of the society.</p>
                    </div>
                    <div class="m-2">
                        <h4>Economically</h4>
                        <p class="text-grey">To provide every assistance possible for those who belongs to the
                            economically weaker sections of the society.</p>
                    </div>
                </div>',
            ]
        ]
    ],
//######################################################################################################################
    [
        "en" => [
            "title" => "Methodology and Mechanism",
            "excerpt" => "The institute has been very successful in making potential aspirants realize their dreams which is evident from the success stories of the previous years.",
        ],
        "hi" => [

            "title" => "कार्यप्रणाली और तंत्र (Methodology and Mechanism)",
            "excerpt" => "संस्थान संभावित उम्मीदवारों को उनके सपनों को साकार करने में बहुत सफल रहा है जो पिछले वर्षों की सफलता की कहानियों से स्पष्ट है।",
        ],
        "slug" => "about-us/methodology-and-mechanism",
        "status" => "active",
        "keywords" => "methodology-and-mechanism",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "about-us/methodology-and-mechanism",
            "status" => "active",
            "hi" => [
                "title" => "Methodology and Mechanism",
                "description" => '<div class="d-flex flex-column my-4">
    <h3 class="mb-3 sidebar-text-bellow-line">प्रणाली एवं पद्वति (Methodology and Mechanism)</h3>
    <p class="text-grey">विगत वर्षों के सिविल सेवा परीक्षा के परिणाम यह प्रदर्शित करते हैं की संस्थान योग्य छात्रों को उनके स्वप्नों को साकार करने में सदैव सहायक रही है |</p>

    <div class="m-2 text-grey">
        <li>काउंसिलिंग</li>
        <li>कक्षा प्रशिक्षण कार्यक्रम</li>
        <li>टेस्ट मूल्यांकन कार्यक्रम</li>
        <li>अध्ययन सामग्री विकास और सुधार</li>
        <li>प्रशासनिक प्रबंधन और मानव संसाधन विकास केंद्र</li>
        <li>दूरस्थ शिक्षा और शिक्षण कार्यक्रम</li>
    </div>
</div>',
            ],
            "en" => [
                "title" => "Methodology and Mechanism",
                "description" => '<div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Methodology and Mechanism</h3>
                    <p class="text-grey">The institute has been very successful in making potential aspirants
                        realize their dreams which is evident from the success stories of the previous years.</p>

                    <div class="m-2 text-grey">
                        <li>Counseling</li>
                        <li>Class Training Programme</li>
                        <li>Test Evaluation Programme</li>
                        <li>Study Material Development and Improvement</li>
                        <li>Administrative Management and Human Resources Development Centre</li>
                        <li>Distance Education and Learning Programme</li>
                    </div>
                </div>',
            ]
        ]
    ],
//######################################################################################################################
    [
        "en" => [
            "title" => "Why Dhyeya IAS",
            "excerpt" => "The institute has been very successful in making potential aspirants realize their dreams which is evident from the success stories of the previous years.",
        ],
        "hi" => [

            "title" => "ध्येय आईएएस क्यों (Why Dhyeya IAS)",
            "excerpt" => "संस्थान संभावित उम्मीदवारों को उनके सपनों को साकार करने में बहुत सफल रहा है जो पिछले वर्षों की सफलता की कहानियों से स्पष्ट है।",
        ],
        "slug" => "about-us/why-dhyeya-ias",
        "status" => "active",
        "keywords" => "why-dhyeya-ias",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "about-us/why-dhyeya-ias",
            "status" => "active",
            "hi" => [
                "title" => "Why Dhyeya IAS",
                "description" => '<div class="d-flex flex-column my-4">
    <h3 class="mb-3 sidebar-text-bellow-line">ध्येय आईएएस ही क्यों? (Why Dhyeya IAS?)</h3>
    <p class="text-grey">ध्येय आईएएस में हम मिसाल पेश करते हुए आगे बढ़ने में विश्वास रखते हैं /हमारी हमारी शक्ति है हमारा लगातार परिणामोन्मुख प्रदर्शन /यह हमारी कटिबद्धता, प्रतियोगितात्मकता एवं सततता का परिणाम है जिसने विगत 10 वर्षों से ध्येय आईएएस को केंद्र एवं राज्य स्तरीय सिविल सेवा परीक्षा संस्थानों में भारत का नंबर 1 संस्थान बनाये रखा है</p>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>उदाहरण के द्वारा नेतृत्व</h5>
                    <p class="text-grey">DhyeyaIAS में, हम उदाहरण के द्वारा नेतृत्व करने में विश्वास करते हैं। हमारी ताकत हमारा लगातार परिणामोन्मुख प्रदर्शन है। यह हमारी प्रतिबद्धता, प्रतिस्पर्धात्मकता और वितरण में निरंतरता है जिसने ध्येयआईएएस को पिछले 10 वर्षों में सिविल सेवाओं और राज्य सेवाओं के लिए भारत का नंबर 1 संस्थान बना दिया है।</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>प्रतिभा को पोषित करना और आकार देना</h5>
                    <p class="text-grey">क्योंकि, आपकी प्रतिभा निर्धारित करती है कि आप क्या कर सकते हैं। आपकी प्रेरणा निर्धारित करती है कि आप कितना करना चाहते हैं, लेकिन आपका दृष्टिकोण निर्धारित करता है कि आप इसे कितना अच्छा करते हैं |</p>
                    <p class="text-grey">ध्येय आईएएस में, हमारा उद्देश्य छात्र की सामर्थ्य बढ़ाने और वांछित क्षमताओं का निर्माण करना है। क्षमता एवं योग्यता दोनों ही महत्वपूर्ण है और इनके संवर्धन में विभिन्न रणनीतियों का समावेश है। हमारी विशेषज्ञ टीम आपको साधारण चीजों को असाधारण अवसरों में बदलने में मदद करती है |</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>क्षमता बढ़ाना और क्षमता निर्माण करना</h5>
                    <p class="text-grey">DhyeyaIAS में, हमारा उद्देश्य छात्रों की क्षमता को बढ़ाना और वांछित क्षमताओं का निर्माण करना है। प्रत्येक महत्वपूर्ण है और इसमें रणनीतियों का एक अलग सेट शामिल है। हमारी विशेषज्ञ टीम आपको सामान्य चीज़ों को असाधारण अवसरों में बदलने में मदद करती है।</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>सर्वश्रेष्ठ अध्ययन सामग्री</h5>
                    <p class="text-grey">ध्येय आईएएस में, हमारा मार्गदर्शक सिद्धांत "अध्ययन का उद्देश्य धनार्जन नहीं वरन सीखना होना चाहिए "। हम भी अपने छात्रों के साथ सीखते हैं और विकसित होते हैं। जितना अधिक हम सीखेंगे उतना ही हम छात्र की आवश्यकता को समझेंगे । इस विचार और विचारधारा के साथ, हम प्रासंगिक अध्ययन सामग्री तैयार एवं विकसित करते हैं |</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>अकादमिक सहयोगियों की समर्पित टीम</h5>
                    <p class="text-grey">हम छात्रों को संलग्न करने और विकसित करने के लिए प्रोत्साहित करते हैं। क्योंकि, हम सभी के पास समान प्रतिभा नहीं हो सकती है, लेकिन हम सभी को सीखने और प्रदर्शन करने के बराबर अवसर होने चाहिए। इसलिए, हम आपको दिन रात अकादमिक सहायता की सुविधा प्रदान करते हैं। हमारे पास अकादमिक एसोसिएट्स की एक समर्पित टीम जिनके पास सिविल सेवा के साक्षात्कार में 2-3 बार सम्मिलित होने का अनुभव है, आपके संदेहों को दूर करने एवं सम्बद्ध विषयों पर चर्चा के द्वारा आपका उचित मार्गदर्शन करते हैं |</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>अध्यापक</h5>
                    <p class="text-grey">विद्यार्थी जुड़ाव - कोई भी महत्वपूर्ण सीख महत्वपूर्ण रिश्ते के बिना नहीं हो सकती। हमारे पास ऐसे शिक्षक हैं जो जितना पढ़ाते हैं उससे कहीं अधिक सीखते हैं। सीखने की प्रक्रिया में, हमारे संकाय छात्रों के साथ जुड़ते हैं और स्थायी संबंध बनाते हैं। इसका उद्देश्य प्रभावी छात्र-शिक्षक भागीदारी विकसित करना और सीखना आसान बनाना है।</p>
                    <p class="text-grey">समाज के कमजोर वर्ग के उम्मीदवारों पर ध्यान केंद्रित करना और उन्हें समाज की मुख्यधारा का हिस्सा बनने में मदद करना।</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>नेतृत्व और प्रबंधन की गुणवत्ता का विकास</h5>
                    <p class="text-grey">शिक्षक - छात्र सम्बन्ध - समुचित शिक्षण के लिए एक अर्थपूर्ण सम्बन्ध आवश्यक है । हमारे पास ऐसे शिक्षक हैं जो सिखाए जाने से ज्यादा सीखने में विश्वास रखते हैं । सीखने की प्रक्रिया में, हमारे शिक्षक छात्रों के साथ शामिल होते है और सम्बन्ध का निर्माण करते है । इस प्रक्रिया के पीछे जो सोच है उसका उद्देश्य छात्र-शिक्षक भागीदारी विकसित करना और सीखने की प्रक्रिया को आसान बनाना है |</p>
                    <p class="text-grey">समाज के कमजोर वर्ग से संबंधित अभ्यर्थियों की सहायता और उन्हें समाज की मुख्यधारा का हिस्सा बनने में मदद करना हमारा परम उद्देश्य रहा है |</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body">
                    <h5>मुख्य परीक्षा उत्तर लेखन कौशल</h5>
                    <p class="text-grey">ज्ञान की अपनी अहमियत है किन्तु सबसे महत्त्वपूर्ण है आप अपने ज्ञान को कैसे प्रदर्शित करते हैं जो छात्र मुख्य परीक्षा उत्तीर्ण नहीं कर पाते हैं ऐसा नहीं है की उनके पास उत्तीर्ण छात्रों से काम ज्ञान है / लिखने का तात्पर्य केवल अपने विचारों को लेखनीबद्ध करना मात्र नहीं है बल्कि यह एक कला है जिसे सतत प्रयास एवं उचित मार्गदर्शन के माध्यम से सुधारा जा सकता है |</p>
                </div>
            </div>
        </div>

    </div>
</div>',
            ],
            "en" => [
                "title" => "Why Dhyeya IAS",
                "description" => '<div class="d-flex flex-column my-4">
                    <h3 class="mb-3 sidebar-text-bellow-line">Why Dhyeya IAS</h3>
                    <p class="text-grey">The institute has been very successful in making potential aspirants
                        realize their dreams which is evident from the success stories of the previous years.</p>

                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Lead By Example</h5>
                                    <p class="text-grey">At DhyeyaIAS, we believe in leading by example. Our
                                        strength is our consistent result-oriented performance. It is our commitment,
                                        competitiveness and consistency in delivery that has made DhyeyaIAS India’s No.1
                                        Institute for Civil Services and State Services since past 10 years.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Nurturing and Shaping Talent</h5>
                                    <p class="text-grey">Because, your Talent determines what you can do.
                                        Your Motivation determines how much you are willing to do, but your Attitude
                                        determines how well you do it. Success comes when you learn the art of balancing
                                        your ATM.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Enhancing Capacity and building Capability</h5>
                                    <p class="text-grey">At DhyeyaIAS, our objective is to enhance student’s
                                        capacity and build desired capabilities. Each one is important and involves
                                        different set of strategies. Our expert team helps you to transform ordinary
                                        things into extraordinary opportunity.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Best Study material</h5>
                                    <p class="text-grey">At DhyeyaIAS, our guiding principle is “don’t study
                                        to earn, rather study to learn”. We, too, learn and grow with our Students. The
                                        more we learn the better we understand student’s requirement. With this idea
                                        and ideology, we develop and design relevant study materials.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Dedicated Team of Academic associates</h5>
                                    <p class="text-grey">We encourage Students to engage and evolve. Because,
                                        all of us may not have equal talent but all of us must have equal opportunity to
                                        learn and perform. Therefore, we get you available the round the clock facility
                                        of Academic help. We have dedicated team of Academic Associates – people who
                                        appeared in interview 2-3 times, to demolish your doubts and discuss with
                                        relevant subject.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Teacher</h5>
                                    <p class="text-grey">Student bonding – No significant learning can occur
                                        without a significant relationship. We have teachers who learn more than they
                                        teach. In the process of learning, our faculty involves with Students and form
                                        everlasting bonding. The idea is to develop effective Student-Teacher
                                        involvement and make learning easy.</p>
                                    <p class="text-grey">To focus at the aspirants belongs to the weaker
                                        section of the society and help them to be the part of the mainstream of the
                                        society.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card h-100 border-0">
                                <div class="card-body">
                                    <h5>Art of Writing Mains Answer</h5>
                                    <p class="text-grey">Knowledge, of course, matters, but what matters most
                                        is how you present your knowledge on paper. Those who don’t able to qualify
                                        Mains Exam doesnt possess iota of less knowledge than who qualify. Writing is
                                        not merely penning down your thoughts. Rather, it is an art, which can be
                                        improved by focused guidance and with constant practice.</p>
                                    <p class="text-grey">How to develop Emotional and Intelligence
                                        quotient.</p>
                                    <p class="text-grey">Use of cutting Edge technologies.</p>
                                    <a href="https://www.dhyeyaias.com/centers" class="nav-link bold-hover">Pan India Centre Available.</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>',
            ]
        ]
    ],
//######################################################################################################################
    /*[
        "hi" => [
            "title" => "संपर्क करें",
            "excerpt" => "संपर्क करें"
        ],
        "en" => [

            "title" => "Contact Us",
            "excerpt" => "This is contact us page"
        ],

        "slug" => "contact-us",
        "status" => "active",
        "keywords" => "संपर्क करें, contact us",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "Sample Please edit",
            "status" => "active",
            "hi" => [
                "title" => "Sample Please edit",
            ],
            "en" => [
                "title" => "Sample Please edit",
            ]
        ]
    ],*/
//######################################################################################################################
    /*[
        "hi" => [
            "title" => "सूचीपत्र",
            "excerpt" => "सूचीपत्रe"
        ],
        "en" => [

            "title" => "Prospectus",
            "excerpt" => "This is prospectus page"
        ],
        "slug" => "prospectus",
        "status" => "active",
        "keywords" => "prospectus, सूचीपत्र",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "Sample Please edit",
            "status" => "active",
            "hi" => [
                "title" => "Sample Please edit",
            ],
            "en" => [
                "title" => "Sample Please edit",
            ]
        ]
    ],*/
//######################################################################################################################
    /*[
        "hi" => [
            "title" => "तय्याती",
            "excerpt" => "तय्याती"
        ],
        "en" => [
            "title" => "Prepare",
            "excerpt" => "prepare"
        ],
        "slug" => "prepare",
        "status" => "active",
        "keywords" => "prepare, तय्याती",

        "post_id" => [
            "post_type" => "daily-pre-pare",
            "user_id" => 1,
            "status" => "active",
            "slug" => "prepare",
            "hi" => [
                "title" => "तय्याती",
            ],
            "en" => [
                "title" => "Prepare",
            ]]
    ],*/
//######################################################################################################################
    /*[
        "hi" => [
            "title" => "बहुविकल्पीय",
            "excerpt" => "बहुविकल्पीय",
        ],
        "en" => [
            "title" => "MCQs",
            "excerpt" => "mcqs"
        ],
        "slug" => "mcqs",
        "status" => "active",
        "keywords" => "mcqs, बहुविकल्पीय",

        "post_id" => [
            "post_type" => "mcqs",
            "user_id" => 1,
            "status" => "active",
            "slug" => "mcq",
            "hi" => [
                "title" => "बहुविकल्पीय",
            ],
            "en" => [

                "title" => "MCQ"
            ]
        ]
    ],*/
//######################################################################################################################
    /*[
        "hi" => [
            "title" => "सामग्री",
            "excerpt" => "सामग्री"
        ],
        "en" => [

            "title" => "Article",
            "excerpt" => "article"
        ],
        "status" => "active",
        "slug" => "article",
        "keywords" => "article, सामग्री",
        "post_id" => [
            "post_type" => "article",
            "user_id" => 1,
            "status" => "active",
            "slug" => "article",
            "hi" => [
                "title" => "सामग्री"
            ],
            "en" => [
                "title" => "Article"
            ]]
    ],*/
//######################################################################################################################
    /*[
        "hi" => [
            "title" => "बैच विवरण",
            "excerpt" => "बैच विवरण",
        ],
        "en" => [

            "title" => "Batch Details",
            "excerpt" => "Batch Details"
        ],
        "slug" => "Batch Details",
        "status" => "active",
        "keywords" => "Batch Details, बैच विवरण",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "Sample Please edit",
            "status" => "active",
            "hi" => [
                "title" => "Sample Please edit",
            ],
            "en" => [
                "title" => "Sample Please edit",
            ]
        ]
    ],*/
//######################################################################################################################
    /*[
        "hi" => [
            "title" => "शुल्क विवरण",
            "excerpt" => "शुल्क विवरण"
        ],
        "en" => [

            "title" => "Fee Details",
            "excerpt" => "Fee Details"
        ],
        "status" => "active",
        "slug" => "Fee Details",
        "keywords" => "Fee Details, शुल्क विवरण",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "status" => "active",
            "slug" => "Fee Details",
            "hi" => [
                "title" => "शुल्क विवरण"
            ],
            "en" => [
                "title" => "Fee Details"]
        ]
    ],*/
//######################################################################################################################
    /*[
        "hi" => [
            "title" => "स्टूडेंट जोन (Student Zone)",
            "excerpt" => "student-zone",
        ],
        "en" => [

            "title" => "Student Zone",
            "excerpt" => "student-zone"
        ],
        "status" => "active",
        "slug" => "student-zone",
        "keywords" => "student-zone",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "Sample Please edit",
            "status" => "active",
            "hi" => [
                "title" => "Sample Please edit",
            ],
            "en" => [
                "title" => "Sample Please edit",
            ]
        ]
    ],*/
//######################################################################################################################
    [
        "hi" => [
            "title" => "Daily News Analysis",
            "excerpt" => "Daily News Analysis",
        ],
        "en" => [

            "title" => "Daily News Analysis",

            "excerpt" => "Daily News Analysis",
        ],
        "status" => "active",
        "keywords" => "Daily News Analysis",
        "slug" => "daily-current-affairs",

        "post_id" => [
            "post_type" => "daily-current-affairs",
            "user_id" => 1,
            "slug" => "daily-current-affairs",
            "status" => "active",
            "hi" => [
                "title" => "Daily News Analysis",
            ],
            "en" => [
                "title" => "Daily News Analysis",
            ]
        ]
    ],
////######################################################################################################################
    [
        "hi" => [
            "title" => "Current Affairs",
            "excerpt" => "Current Affairs",
        ],
        "en" => [

            "title" => "Current Affairs",

            "excerpt" => "Current Affairs",
        ],
        "status" => "active",
        "keywords" => "Current Affairs",
        "slug" => "current-affairs",

        "post_id" => [
            "post_type" => "current-affairs",
            "user_id" => 1,
            "slug" => "current-affairs",
            "status" => "active",
            "hi" => [
                "title" => "Current Affairs",
            ],
            "en" => [
                "title" => "Current Affairs",
            ]
        ]
    ],
////######################################################################################################################
    [
        "hi" => [
            "title" => "Info Paedia",
            "excerpt" => "Info Paedia",
        ],
        "en" => [

            "title" => "Info Paedia",

            "excerpt" => "Info Paedia",
        ],
        "status" => "active",
        "keywords" => "Info Paedia",
        "slug" => "info-paedia",

        "post_id" => [
            "post_type" => "Info-paedia",
            "user_id" => 1,
            "slug" => "info-paedia",
            "status" => "active",
            "hi" => [
                "title" => "Info Paedia",
            ],
            "en" => [
                "title" => "Info Paedia",
            ]
        ]
    ],
////######################################################################################################################
    [
        "hi" => [
            "title" => "Air Debate",
            "excerpt" => "Air Debate",
        ],
        "en" => [

            "title" => "Air Debate",
            "excerpt" => "Air Debate",
        ],
        "status" => "active",
        "keywords" => "Air Debate",
        "slug" => "air-debate",

        "post_id" => [
            "post_type" => "air-debate",
            "user_id" => 1,
            "slug" => "air-debate",
            "status" => "active",
            "hi" => [
                "title" => "Air Debate",
            ],
            "en" => [
                "title" => "Air Debate",
            ]
        ]
    ],
////######################################################################################################################
    [
        "hi" => [
            "title" => "Brain Booster",
            "excerpt" => "Brain Booster",
        ],
        "en" => [

            "title" => "Brain Booster",

            "excerpt" => "Brain Booster",
        ],
        "status" => "active",
        "keywords" => "Brain Booster",
        "slug" => "brain-booster",

        "post_id" => [
            "post_type" => "brain-booster",
            "user_id" => 1,
            "slug" => "brain-booster",
            "status" => "active",
            "hi" => [
                "title" => "Brain Booster",
            ],
            "en" => [
                "title" => "Brain Booster",
            ]
        ]
    ],
////######################################################################################################################
    [
        "hi" => [
            "title" => "Daily Static Mcqs",
            "excerpt" => "Daily Static Mcqs",
        ],
        "en" => [

            "title" => "Daily Static Mcqs",

            "excerpt" => "Daily Static Mcqs",
        ],
        "status" => "active",
        "keywords" => "Daily Static Mcqs",
        "slug" => "daily-static-mcqs",

        "post_id" => [
            "post_type" => "daily-static-mcqs",
            "user_id" => 1,
            "slug" => "daily-static-mcqs",
            "status" => "active",
            "hi" => [
                "title" => "Daily Static Mcqs",
            ],
            "en" => [
                "title" => "Daily Static Mcqs",
            ]
        ]
    ],
////######################################################################################################################
    [
        "hi" => [
            "title" => "Daily Mcqs",
            "excerpt" => "Daily Mcqs",
        ],
        "en" => [

            "title" => "Daily Mcqs",

            "excerpt" => "Daily Mcqs",
        ],
        "status" => "active",
        "keywords" => "Daily Mcqs",
        "slug" => "daily-mcqs",

        "post_id" => [
            "post_type" => "daily-mcqs",
            "user_id" => 1,
            "slug" => "daily-mcqs",
            "status" => "active",
            "hi" => [
                "title" => "Daily Mcqs",
            ],
            "en" => [
                "title" => "Daily Mcqs",
            ]
        ]
    ],
////######################################################################################################################
    [
        "hi" => [
            "title" => "Classroom Programme",
            "excerpt" => "Classroom Programme",
        ],
        "en" => [

            "title" => "Classroom Programme",

            "excerpt" => "Classroom Programme",
        ],
        "status" => "active",
        "keywords" => "classroom-programme",
        "slug" => "courses/classroom-programme",

        "post_id" => [
            "post_type" => "course",
            "user_id" => 1,
            "slug" => "courses/classroom-programme",
            "status" => "active",
            "hi" => [
                "title" => "Classroom Programme",
                "description" => '<section id="main-content">
<div id="content" class="region">
<div id="block-system-main" class="block block-system no-title even last block-count-4 block-region-content block-main">
<article id="node-9" class="node node-page article odd node-full ia-c clearfix" role="article">
<div class="node-content">
<div class="field field-name-body field-type-text-with-summary field-label-hidden view-mode-full">
<div class="field-items">
<div class="field-item even">
<p>प्रथमतः परीक्षा की तैयारी और एक विशद रणनीति सफलता की कुंजी है /इस विचार एवं इरादे के साथ हमारी अत्यंत योग्य एवं अनुभवी अध्यापकों की टीम विभिन्न विषयों को कवर करने के लिए एक विशिष्ट रणनीति का विकास किया है / हम अभ्यर्थियों को स्पष्ट अवधारणाओं एवं अन्तः विषय दृष्टिकोण विकसित करने में सहायता प्रदान करते है जो उन्हें इस प्रतिष्ठित परीक्षा को उत्तीर्ण करने में मदद कर सके /हमारी उन्नत शिक्षा तकनीकी अभ्यर्थियों के लक्ष्य प्राप्ति के लिए एक विश्वसनीय रोड मैप का निर्माण करती है /हम अभ्यर्थियों के परिश्रम, दृढ निश्चय , मनोबल और परीक्षापरक रणनीति को सुदृढ़ करने के साथ साथ उन्हें अपने सपनो और आकांक्षाओं को पूरा करने के लिए सशक्त बनाते हैं / upsc परीक्षा के तेजी से बदलते हुए पैटर्न को देखते हुए हम अभ्यर्थियों के साथ पूरी तत्परता से उनके उन्नत प्रदर्शन के लिए प्रयासरत रहते हैं |</p>
<div>
<h2>प्रीमियम बैच (प्रीलिम + मुख्य परीक्षा + साक्षात्कार) - अवधि: 12 महीने</h2>
</div>
<ul>
<li>बुनियादी से लेकर एडवांस्ड तक एकीकृत और अंतःविषय दृष्टिकोण का विकास।</li>
<li>आईएएस प्रारंभिक और मुख्य परीक्षा से पहले मूल्य वृद्धि कार्यक्रम।</li>
<li>व्यक्तिगत स्तर पर उचित मार्गदर्शन और फीडबैक</li>
<li>लेखन कौशल विकास</li>
<li>नियमित क्लास टेस्ट</li>
</ul>
<div>
<h2>फाउंडेशन बैच (पूर्ण पीसीएस तैयारी / आईएएस प्रीलिम्स ) - अवधि: 6 महीने</h2>
</div>
<ul>
<li>
<p>आईएएस परीक्षा के लिए सामान्य अध्ययन की बुनियादी समझ और राज्य पीसीएस परीक्षाओं और संघ लोक सेवा आयोग द्वारा आयोजित अन्य परीक्षाएं जैसे आईईएस, सीएपीएफ, सीडीएस आदि की पूरी तैयारी हेतु मार्गदर्शन ।</p>
</li>
<li>स्नातक छात्रों पर विशेष फोकस ।</li>
</ul>
<div>
<h2>मुख्य बैच (मुख्य परीक्षा + साक्षात्कार) - अवधि: 8 माह</h2>
</div>
<ul>
<li>अग्रिम स्तर और अंतःविषय दृष्टिकोण पर संकल्पनात्मक समझ का विकास।</li>
<li>स्नातक छात्रों पर विशेष ध्यान केंद्रित।</li>
</ul>
<div>
<h2>CSAT बैच (प्रीलिम्स ) - अवधि: 4 महीने</h2>
</div>
<ul>
<li>कांसेप्ट बिल्डिंग और स्पष्टीकरण।</li>
<li>स्पेशल प्रैक्टिस सेशन एवं मॉक टेस्ट।</li>
</ul>
<div>
<h2>फाउंडेशन (10 + 2) बैच (प्रीलिम + मेन + साक्षात्कार) - अवधि: 3 साल</h2>
</div>
<ul>
<li>प्रतिस्पर्धात्मक वातावरण- सोचने के नए तरीकों का विकास/सफल सिविल सेवा प्रशाशकों के माध्यम से प्रेरक व्याख्यान</li>
<li>आत्मविश्वास एवं व्यक्तित्व विकास /विशेषज्ञों द्वारा व्यक्तित्व विकास एवं अंतर्वैयक्तिक समस्या समाधान</li>
<li>प्रोजेक्ट वर्क, केस स्टडीज और वाह्य सामाजिक गतिविधियों पर फोकस /समय एवं अध्ययन प्रबंधन का विकास</li>
</ul>
<div>
<h2>वैकल्पिक विषय-अवधि: 6 महीने</h2>
</div>
<ul>
<li>इतिहास</li>
<li>भूगोल</li>
<li>राजनीति विज्ञान</li>
<li>नागरिक शास्त्र</li>
</ul>
<div>
<h2>साक्षात्कार कार्यक्रम</h2>
</div>
<p>यह चरण सिविल सेवा अभ्यर्थी की सफलता एवं रैंक का निर्धारण करने में अत्यंत महत्त्वपूर्ण स्थान रखता है/यह सिविल सेवा परीक्षा का अंतिम किन्तु निर्णायक चरण है / साक्षात्कार का उद्देश्य ज्ञानी अनुभवी एवं तटस्थ सदस्यों के बोर्ड द्वारा प्रतियोगी की सिविल सेवा में उपयोगिता का आकलन करना है //इस कार्यक्रम के द्वारा हम प्रतियोगियों को न सिर्फ संतुलित और सटीक विचारों की कला प्रदर्शित करने के लिए तैयार करते हैं बल्कि उन्हें प्रभावी ढंग से संवाद की कला में भी निपुण बनाते हैं /प्रति वर्ष मुख्य परीक्षा परिणामों के तुरंत बाद हम साक्षात्कार प्रशिक्षण कार्यक्रम का आयोजन करते है / हमारे संसथान के अनुभवी एवं योग्य प्रशिक्षकों द्वारा मोक इंटरव्यू सेशंस के माध्यम से अभ्यर्थियों को व्यक्तिगत रूप से व्यक्तित्व विकास के लिए प्रशिक्षण दिया जाता है |</p>
</div>
</div>
</div>
</div>
</article>
</div>
</div>
</section>',
            ],
            "en" => [
                "title" => "Classroom Programme",
                "description" => '<section id="main-content">
<div id="content" class="region">
<div id="block-system-main" class="block block-system no-title odd first last block-count-3 block-region-content block-main">
<article id="node-7" class="node node-page article odd node-full ia-c clearfix" role="article">
<div class="node-content">
<div class="field field-name-body field-type-text-with-summary field-label-hidden view-mode-full">
<div class="field-items">
<div class="field-item even">
<section id="main-content">
<div id="content" class="region">
<div id="block-system-main" class="block block-system no-title odd first last block-count-3 block-region-content block-main">
<article id="node-7" class="node node-page article odd node-full ia-c clearfix" role="article">
<div class="node-content">
<div class="field field-name-body field-type-text-with-summary field-label-hidden view-mode-full">
<div class="field-items">
<div class="field-item even">
<p>Before anything else, preparation and razor sharp strategy is the key to success. With this idea and intention, our highly qualified and experienced faculty members developed distinguished strategy to cover different topics in a well defined manner. We assist aspirants to develop crystal clear concepts and interdisciplinary approach to crack this coveted exam. Our innovative teaching techniques create a reliable road map to candidate&rsquo;s goals. We empower you to fulfill dreams and expectations while nourishing the ingredients of hardwork, determination, confidence with right-direction and exam cracking strategy. We work proactively with Aspirants to improve their performance with rapidly changing patterns of UPSC exam.</p>
<div>
<h2>PREMIUM BATCH (Prelims + Main + Interview) - Duration : 12 Months</h2>
</div>
<ul>
<li>Development of Integrated and Interdisciplinary approach from basic to advance.</li>
<li>Value Addition Programmes before IAS Preliminary and Main Examination.</li>
<li>Proper guidance and feedback at personal level</li>
<li>Writing skill Development</li>
<li>Regular class tests</li>
</ul>
<div>
<h2>FOUNDATION BATCH (Complete PCS Preparation/ IAS PRELIMS) - Duration : 6 Months</h2>
</div>
<p>Development of basic understanding of General Studies for IAS Exam and complete preparation for state PCS exams and other exams conducted by Union Public Service Commission such as IES, CAPF, CDS etc.<br>Special focus on under-graduate students.</p>
<div>
<h2>MAIN BATCH (Main + Interview) - Duration : 8 Months</h2>
</div>
<ul>
<li>Development of Conceptual Understanding at Advance Level &amp; Interdisciplinary Approach.</li>
<li>Special focus on under-graduate students.</li>
</ul>
<div>
<h2>CSAT BATCH (Prelims) - Duration : 4 Months</h2>
</div>
<ul>
<li>Concept Building &amp; Clarification.</li>
<li>Special Practice Sessions &amp; Mock Tests.</li>
</ul>
<div>
<h2><a href="https://www.dhyeyaias.com/Dhyeya-IAS-Udaan" target="_blank" rel="noopener">UDAAN</a>&nbsp;(10+2) BATCH (Prelims + Main + Interview)- Duration : 3 Years</h2>
</div>
<ul>
<li>Competitive and Energetic Environment &ndash; Newer ways of Thinking, Self-motivated atmosphere. Successful Civil Servants will take motivational lectures.</li>
<li>Building Confidence and Personality Development. Experts will take lectures on Personality Development and one-to-one Interaction for individual problem solving.</li>
<li>Focus on project work, Case Studies and Outdoor social activities. Empirical Study will enhance their grasping power and will help connect them with the content of topic.</li>
<li>Time Management and Study Management.</li>
</ul>
<div>
<h2>OPTIONAL SUBJECTS -Duration : 6 months</h2>
</div>
<ul>
<li>History</li>
<li>Geography</li>
<li>Political Science</li>
<li>Sociology</li>
</ul>
<h2>Interview Programme</h2>
<p>Success and rank of an aspirant is determined significantly by this last but very important segment of exam process. The purpose of interview is to assess candidate&rsquo;s suitability for a career in public service by a board of highly competent, knowledgeable, experienced and unbiased members who have excellent career profile. Through this programme we prepare candidates to exhibit not only the art of balanced and precise thoughts but also the art of communicating them effectively. Immediately after Main exam result we organize interview Training programme each year. Experts of our institute work on individual&rsquo;s basis for personality improvement through training sessions and mock interview sessions.</p>
</div>
</div>
</div>
</div>
</article>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</article>
</div>
</div>
</section>',
            ]
        ]
    ],
////######################################################################################################################
    [
        "hi" => [
            "title" => "UPSE FAQs",
            "excerpt" => "UPSE FAQs",
        ],
        "en" => [

            "title" => "UPSE FAQs",
            "excerpt" => "UPSE FAQs",
        ],
        "status" => "active",
        "keywords" => "UPSE FAQs",
        "slug" => "FAQs",

        "post_id" => [
            "post_type" => "page",
            "user_id" => 1,
            "slug" => "FAQs",
            "status" => "active",
            "hi" => [
                "title" => "UPSE FAQs",
                "description" => '<section class="pt-2" id="student_zone_upseAndFaqs">
        <div class="my-3">
            <div class="my-4">
                <h1 class="fw-600">Frequently Asked Questions (FAQs) about UPSC</h1>
            </div>

            <div class="my-3">
                <h3>Q. What is the educational qualification needed to appear in IAS exam?</h3>
                <p><strong>Answer:</strong>&nbsp;Any degree (graduation) which may be regular or distant. The candidate must hold a degree from any of Universities incorporated by an Act of the Central or State Legislature in India or other educational institutions established by an Act of Parliament or declared to be deemed as a University Under Section-3 of the University Grants Commission Act, 1956, or possess an equivalent qualification.</p>
                <h3>Q. Can final year students of graduation apply for UPSC CSE?</h3>
                <p><strong>Answer:</strong>&nbsp;Yes, candidates who have appeared at an examination the passing of which would render them educationally qualified for the Commissions examination but have not been informed of the results as also the candidates who intend to appear at such a qualifying examination will also be eligible for admission to the Preliminary Examination.</p>
                <h3>Q. When should I produce the proof of passing my graduation examination before UPSC?</h3>
                <p><strong>Answer:</strong>&nbsp;All candidates who are declared qualified by the Commission for taking the Civil Services (Main) Examination will be required to produce proof of passing the requisite examination with their application for the Main Examination failing which such candidates will not be admitted to the Main Examination.</p>
                <h3>Q. I hesitate to apply for Civil Services Exam because I cannot speak fluently in English. Is it possible that I write the Civil Services Main Exam in English and take the interview in Hindi or in any other India Language?</h3>
                <p><strong>Answer:</strong>&nbsp;You need not be afraid of applying for the Civil Services Exam because UPSC give following options in this respect:</p>
                <ul>
                    <li>If you opt to write the Civil Services Main Exam in English, you may choose either english as the medium for interview or Hindi or any other Indian language opted by you for the compulsory Indian Language Paper in the written part of civil services mains examination as the medium for interview. However, if you are exempted from the Compulsory Indian Language paper, you will have to choose either English or Hindi as medium of interview.</li>
                    <li>If you opt for Indian Language medium for the written part of the Civil Services Main Exam, you can choose either the same Indian Language or English or Hindi as the medium for the Interview or Personality Test.</li>
                </ul>
                <h3>Q. If I apply for the Civil Services Prelims Exam but do not appear in any paper will it be counted as an attempt?</h3>
                <p><strong>Answer:</strong>&nbsp;No, an attempt will be counted only if you have appeared in at least one paper.</p>
                <h3>Q. If a candidate belongs to a community included in the OBC list of states but not in the Central list of OBCs is he eligible for age relaxation, reservation etc. for Civil Services Examinations?</h3>
                <p><strong>Answer:</strong>&nbsp;No, only candidates belonging to communities which are included in the Central list of OBC are eligible for such concessions.</p>
                <h3>Q. Can I choose an optional subject (in Mains), which I have not studied at Graduate/PG level?</h3>
                <p><strong>Answer:</strong>&nbsp;Yes, you can choose any optional subject from amongst the UPSC list of optional subjects for Civil Services Main Exam.</p>
                <h3>Q. Can I write different papers of Civil Services Main Exam. in different languages?</h3>
                <p><strong>Answer:</strong>&nbsp;No, you have the option to write your answers either in English or in any one of the languages included in the Eighth schedule to Constitution.</p>
                <h3>Q. Generally, it is advised that the candidates should carefully study the last 10 years question papers of General Studies (Prelims) exam as these give a fair idea as to how the questions are framed from the respective themes of the syllabus and also indicate the difficulty level.</h3>
                <p><strong>Answer:</strong>&nbsp;Yes, previous years papers help the candidates to know the trend, and they must go through these papers again and again.</p>
                <h3>Q. Are individual marks secured in various papers or aggregate marks across all papers considered f or merit?</h3>
                <p><strong>Answer:&nbsp;</strong>Total marks are considered.</p>
                <h3>Q. How tough is the competition in UPSC Civil Services Examination (CSE)?</h3>
                <p><strong>Answer:</strong>&nbsp;You can assess the level of competition from the following data:</p>
                <ul>
                    <li>No. of vacancies advertised every year : Between 1000 and 1200.</li>
                    <li>No. of candidates who filled the form : More than 9,00,000</li>
                    <li>No. of applications who appeared in the Preliminary exam : Almost 4,50,000-5,00,000</li>
                    <li>No. of candidates who qualify the Prelims and become eligible to appear in the Mains Exam : Equal to 12 to 13 times the nos. of vacancies of CSE.</li>
                    <li>Nos. of Candidates who qualify Mains to appear in the Interview : 2-2&frac12; times the Nos. of vacancies in the CSE. Thus, one can say that CSE is one of the tough est competitive examinations.</li>
                </ul>
                <h3>Q. Will there be any exceptions to the above-mentioned educational requirements?</h3>
                <p><strong>Answer:</strong>&nbsp;In exceptional cases the Union Public Service Commission may treat a candidate who has not any of the foregoing qualifications as a qualified candidate provided that he/she has passed examination conducted by the other Institutions, the standard of which in the opinion of the Commission justifies his/her admission to the examination.</p>
                <h3>Q. I possess professional/technical qualification. Am I eligible to appear for UPSC CSE?</h3>
                <p><strong>Answer:&nbsp;</strong>Candidates possessing professional and technical qualifications which are recognised by the Government as equivalent to professional and technical degree would also be eligible for admission to the examination.</p>
                <h3>Q. I have passed MBBS, but not completed internship. Can I appear for UPSC CSE Mains?</h3>
                <p><strong>Answer:&nbsp;</strong>Candidates who have passed the final professional M.B.B.S. or any other Medical Examination but have not completed their internship by the time of submission of their applications for the Civil Services (Main) Examination, will be provisionally admitted to the Examination provided they submit a copy along with their application a copy of certificate from the concerned authority of the University/Institution that they had passed the requisite final professional medical examination, along with their application. In such cases, the candidates will be required to produce at the time of their interview original Degree or a certificate from the concerned competent authority of the University/Institution that they had completed all requirements (including completion of internship) for the award of the Degree.</p>
                <h3>Q. Can I clear IAS exam without attending classroom coaching?</h3>
                <p><strong>Answer:&nbsp;</strong>Yes, you can if you are good at self-study. We are not against classroom coaching. There are good institutes and teachers who help aspirants save a lot of time and effort. But not all coaching institutes provide quality service, so if you wish to join one, do that after proper research. It should also be noted that with the advent of technology, guidance and study materials can be sought online. Our website (Dhyeya IAS) provides free guidance and study materials to lakhs of aspirants who can not afford classroom coaching. You can also learn and compete with thousands of aspirants across India by attempting Dhyeya IAS full length timed online mock test series with negative marking for UPSC Prelims.</p>
                <h3>Q. Will there be an individual cut-off for two papers in Civil Service Prelims?</h3>
                <p><strong>Answer:&nbsp;</strong>The minimum cut off marks for Paper 2 is 33 percent. The Commission may fix a minimum cut-off mark for Paper 1 too.</p>
                <h3>Q. Will there be negative marks or different marks for Preliminary Questions?</h3>
                <p><strong>Answer:&nbsp;</strong>There will be negative marking for incorrect answers for all questions except some of the questions where the negative marking will be inbuilt in the form of different marks being awarded to the most appropriate and not so appropriate answers for such questions.</p>
                <h3>Q. Which stream/subject should I choose for graduation to clear UPSC exam?</h3>
                <p><strong>Answer:&nbsp;</strong>Most of the questions in the general studies paper in Prelims and Mains are related to Humanities background. But it is neither necessary nor advisable to take Humanities as your graduation stream just to clear UPSC exam. Graduation should be based on your interest &ndash; it can be humanities, science, engineering, literature or management. For graduation, select any stream you like to study for 3-4 years. You are free to choose any optional subject for UPSC Mains and it may not be the one you studied for graduation.</p>
                <h3>Will there be minimum qualifying marks for UPSC Mains Compulsory Papers?</h3>
                <p><strong>Answer:&nbsp;</strong>The Commission has the discretion to fix qualifying marks in any or all the subjects of the examination. Since 2015, the minimum mark were 25% for Indian language and English langu age. For GS1, GS2, GS3 and GS4 the minimum marks expected are 10%.</p>
                <h3>Q. Will UPSC deduct marks for bad handwriting?</h3>
                <p><strong>Answer:</strong>&nbsp;If a candidates handwriting is not easily legible, a deduction will be made on this account from the total marks otherwise accruing to him.</p>
                <h3>Q. Will there be minimum qualifying marks for UPSC Interview?</h3>
                <p><strong>Answer:&nbsp;</strong>The interview will carry 275 marks (with no minimum qualifying marks).</p>
                <h3>Q. Can candidates use calculators in UPSC Civil Services Exam?</h3>
                <p><strong>Answer:&nbsp;</strong>Not for UPSC Civil Services Preliminary Exam. But candidates will be allowed to use the Scientific (Non-Programmable type) Calculators at the subjective type examination of UPSC, ie Mains Exam. Programmable type calculators will not however be allowed and the use of such calculators shall tantamount to resorting to unfair means by the candidates. Loaning or interchanging of calculators in the Examination Hall is not permitted. It is also important to note that candidates are not permitted to use calculators for answering objective type papers (Test Booklets). They should not, therefore, bring the same inside the Examination Hall.</p>
                <h3>Q. Is coaching important?</h3>
                <p><strong>Answer:&nbsp;</strong>This is one of the most frequently asked questions. UPSC has been constantly changing its pattern over the years to make the civil services exam preparation accessible and possible to students from every set of background. Its Endeavour is to neutralize the effect of coaching so that all candidates come on a equal platform. However, the fact remains &ndash; most of the candidate who succeed have taken coaching at some point of their preparation. This is chiefly due to:</p>
                <ul>
                    <li>The vast syllabus, especially in general studies which the candidates find very difficult to do on their own in a shortest possible period. Moreover, the students are flooded with so many books that they get confused about consulting which ones. Class notes and Material provide a solution to this.</li>
                    <li>The candidates many times in their quest for acquiring knowledge lose track of time. They overdo the studies in some subjects at the cost of others. Coaching institutes cover the syllabus within the time period and thus are sought after.</li>
                </ul>
                <p>However, the need for coaching could be removed wholly if the candidates could get the right study material and the right guidance for the examination.</p>
                <p>A word of caution also needs to be included here. If a candidate has made his mind to enroll himself in any coaching, he must go for the best reputed ones. There are many coaching institutes which advertise very attractively, boasting on claims for producing toppers, which is many times false. The candidates who get attracted eventually land up in these institutes which take a toll on their valuable time, money and energy. The candidates must personally make queries about the coaching institutes, asking the students who were previously enrolled and then, only making right decisions.</p>
                <h3>Q. Should we prepare our own Notes?</h3>
                <p><strong>Answer:&nbsp;</strong>Nothing could be better than this. However, the problem comes when one considers the wide syllabus, which is too vast if we include two optional papers and the general studies which in turn comprises so many subjects.</p>
                <p>One can decide to pair his own notes in those areas in which one is weak, or there are many sources to consult, or on those topics which are very important from the examination point of view. Otherwise, it will be a Herculean task to prepare notes on individual topics.</p>
                <p>But those candidates who have decided to appear in civil services exam during their graduation years may go for this as they have ample time to contribute.</p>
                <h3>Q. How many hours of study are sufficient?</h3>
                <p><strong>Answer:&nbsp;</strong>The answer is as many hours as you can study efficiently. In civil services preparation, there is never a time when one feels that there is nothing more to study. So, what exactly matters is the quality of studying rather quantity of reading. First the difference between "studying" and "reading" should be understood. Reading means mere verbalisation of the written texts. What lacks here is understanding. When understanding adds to "Reading &ndash; it becomes studying". So the issue how many hours you can sit and read the text with understanding also connotes to analysis, deep processing of information, interrelating with your past knowledge base and making a view on the topic. Reading on the other hand is merely a passive activity where involvement of the reader is the least.</p>
                <p>We can thus conclude that studying for 8 hours is many times more fruitful than reading for 16 hours. That is to say "Quality" is more important than the "Quantity" invested.</p>
                <h3>Q. Can an average student also compete with the rest?</h3>
                <p><strong>Answer:</strong>&nbsp;An average student has an added advantage as he knows his limitations. He knows he does not have any time to waste. The intelligent ones feel they have the ability to start late and end early ... and they lose at the end. The tortoise rabbit story is not obsolete yet.</p>
                <p>In fact, most of the students who succeed in the Civil service were very ordinary students in their academics. But they knew, how add "extra" into "ordinary" to become "extraordinary". That extra is provided by their firm<br>determination, an honest self-assessment and foolproof planning followed by strict implementation. In short, the hard work put in by them ultimately lands them at the summit of success.</p>
                <h3>Q. How does a good bio-data matter?</h3>
                <p><strong>Answer:&nbsp;</strong>Bio-data matters during the interview and personality test (i.e. during the third phase). Personality test is based wholly or mostly on the basis of bio-data and the questions are framed on information provided by you. In fact, the-then personality is judged by the interview board on the parameters of suitability of candidates for the job. However, a bad bio-data may give some unfavourable impression on the members of the board and thus, a kind of judgment is formed by them consciously or unconsciously.</p>
                <p>At the same time the members of the board are very experienced and they give full opportunity to candidates to thwart any pre-notions formed by the bio-data. So, the candidates by their performance in the interview have full opportunity to score high in the Interview.</p>
                <p>But, the idea is that those candidates who are in their early academic years should try and see that their biodata is without any shortcomings.</p>
                <h3>Q. Could the civil services questions be answered in the regional languages?</h3>
                <p><strong>Answer:&nbsp;</strong>Yes, aspirants can write answers in any language provided in the eighth schedule of the constitution of India.</p>
                <h3>Q. Preparation for Preliminary and Mains &ndash; Separate or Integrated?</h3>
                <p><strong>Answer:&nbsp;</strong>Can knowledge be compartmentalized? No, in fact it is an integrated whole which gives a comprehensive understanding. Same holds true for the preparation. The whole subject should be understood in its entirety. Only then the requirement for the Preliminary and Mains could be fulfilled through particular emphasis on the orientation. The orientation for Prelims is towards a mix of factual information and understanding with a bias towards the former.</p>
                <h3>Q. When should one take his first attempt irrespective of the fact how many attempts the candidate has?</h3>
                <p><strong>Answer:&nbsp;</strong>Many candidates appear in their first attempt taking it to be a learning experience. This is the biggest mistake they commit. UPSC attempts are very precious ones. Many candidates regret wasting their first attempt and wish if they had one they would have cracked the exam. The candidates must be very serious before appearing in the preliminary exam. They must complete the whole syllabus in their optional as well as general studies. They must check their performance by taking mock tests at home and work out the weak areas. The greatest benefit of the whole exercise is that there is a high probability that they get through the preliminary exam. If unfortunately, they could not, at least they came to know their grey and weak areas on which they need to concentrate. This enlightenment benefits them immensely in their next attempt. Those who waste their first attempt do not come to know about their shortcomings and in this situation may even waste their other attempts.</p>
                <h3>Q. How to select the optionals?</h3>
                <p><strong>Answer:&nbsp;</strong>This has been answered earlier too. The basic criteria are in same sequence of importance.</p>
                <ul>
                    <li>Interest.</li>
                    <li>Availability of study material and guidance.</li>
                    <li>Gap between the optionals during the Mains exam.</li>
                    <li>Scoring optionals &ndash; trend prevailing.</li>
                </ul>
                <h3>Q. Speaking English during an Interview &ndash; How important is it?</h3>
                <p><strong>Answer:&nbsp;</strong>UPSC holds personality tests and interviews in English, Hindi and all other languages in the 8th schedule &ndash; i.e. 22 languages, provided the candidates writes all the papers ()optional and general studies) in the same language. Also, UPSC through the Civil Services exam tries to dig out the best brains in the country, who could contribute in development and progress of the nation. It is thus a wrong notion to hold that the UPSC is language-biased. However, the candidates themselves need to learn English for their own sake as during their long career in civil services they have to come across so many occasions where they will have to communicate with various kind of organisations, institutions, seniors and people and during such a situation, language should not be a limitation.</p>
                <h3>Q. When I see people around me who do not have final get selected in the prestigious services, then I lose self- confidence. What should I do in this situation?</h3>
                <p><strong>Answer:</strong>&nbsp;Generally, we see most of the people around us who are not selected. Seeing them, your self-confidence should not be reduced because everyone has a different strategy. We should always remember that most of the candidates who are finally selected are also from us.</p>
                <p>Not only information and knowledge is sufficient for the final selection but also keeping in mind the demand of the examination and importance of contemporary issue in answer-writing is important.</p>
                <h3>Q. Failure can be for several reasons:</h3>
                <p><strong>Answer:</strong></p>
                <ul>
                    <li>Time is limited in the examination hall, despite being, aware of the questions, one is not able to express correctly because one has not practiced properly.</li>
                    <li>Pressure management just before the examination is not done properly, so that the answer to the known question with the correct information goes wrong too.</li>
                    <li>Lack of Right Guidance on strategy.</li>
                    <li>No assessment of ability of a aspirant regarding time management, use of fact and writing style.</li>
                </ul>
                <p><strong>Solution</strong></p>
                <ul>
                    <li>Keep a positive view, meet successful people, ignore negative thought.</li>
                    <li>Do not loose your self-confidence, you have immense potential use it to achieve your goal honestly.</li>
                    <li>Identify your short-comings and try to remove them. Go ahead with your determination by choosing your own way.</li>
                </ul>
                <h3>Q. Family pressure is high on girls due to which there is no consideration in studies, what to do for it.</h3>
                <ul>
                    <li>Stay focused on your goal, concentrate with your full passion and energy to achieve your goals.</li>
                    <li>Take your parents and family in confidence which will in turn help you achieve your goal.</li>
                    <li>If success is achieved in the 1st stage, the trust of the parents and family increase and therefore work hard to achieve the goal in first go itself.</li>
                    <li>Do not think negatively for the next set of problems, try to improve the present. Become an inspiration for yourself, set small goals and fulfil them, thereby strengthening self-confidence.</li>
                </ul>
                <h3>Q. I have got only one year time duration for preparation. Can I become an IAS in such a short period of time?</h3>
                <p><strong>Answer:</strong>&nbsp;Well, for the preparation of the IAS Exam, one or two years of intensive study is required because the syllabus is very wide and its is also necessary to have an understanding and hold on the subject and it takes a little time, but with the right strategy, better guidance, perseverance it can be done in one year also.</p>
                <p>Aspirants family background, academic ability and his basic understanding, plays a very decisive role. If everything is positive and favourable then success can be achieved even in one year by hard work.</p>
                <h3>Q. How to read NCERT books?</h3>
                <p><strong>Answer:</strong>&nbsp;In NCERT syllabus subject matter is given in the form of stories and very simple language is used. Try to understand the theme of the story and link them with contemporary world.</p>
                <ul>
                    <li>It is like the ocean in the Gorge.</li>
                    <li>NCERT develops your understanding ability and play the foundational role in you preparation .</li>
                    <li>Try to solve the questions given in the book, this will improve your writing style and also the grip on the subject will become strong.</li>
                </ul>
                <h3>Q. Is it mandatory to read India Year Book?</h3>
                <p><strong>Answer:&nbsp;</strong>Must be read, as it contains detailed information on the Governments plans, policies and the achievements of the government and challenges before it.</p>
                <ul>
                    <li>If the whole book is not possible then read some selected chapters for example Environment, Finance, Culture and tourism etc. Communication and information technology, justice and law, Health and Family welfare, India and the world, Water resources, National Events, Scientific and Technological development etc.</li>
                    <li>These chapters are very important in terms of exam. Use them according to the syllabus.</li>
                </ul>
                <h3>Q. How helpful is the Test Series in preparation?</h3>
                <p><strong>Answer:</strong></p>
                <ul>
                    <li>Extremely helpful, because we get atmosphere resembling the examination hall and performing well strengthen our mental abilities.</li>
                    <li>Through Test Series we evaluate our self-preparation because we cover whole syllabus in accordance with test series schedule that will benefit us in the exam. Test Series also motivate us to perform well under pressure.</li>
                    <li>If we get good score in test series, our self-confidence goes up and it also inspire us to work hard.</li>
                </ul>
                <h3>Q. If I am working then how can I prepare for the UPSC exam?</h3>
                <p><strong>Answer:&nbsp;</strong>Nature of the job will matter, you will have to adjust with your routine, as well as time management also becomes important as quality of study is more important than the quantity.</p>
                <ul>
                    <li>Target should set weekly, so that you do not feel bored. Confidence will also increase on completion of weekly target.</li>
                    <li>utilize weekend very well, revise what you have read throughout the week, assess your preparation through the tests.</li>
                    <li>Handling pressure needs a smart strategy, revise whatever you read, read selectively, and also work on writing skills.</li>
                </ul>
            </div>
        </div>
    </section>'
            ],
            "en" => [
                "title" => "UPSE FAQs",
                "description" => '<section class="pt-2" id="student_zone_upseAndFaqs">
        <div class="my-3">
            <div class="my-4">
                <h1 class="fw-600">Frequently Asked Questions (FAQs) about UPSC</h1>
            </div>

            <div class="my-3">
                <h3>Q. What is the educational qualification needed to appear in IAS exam?</h3>
                <p><strong>Answer:</strong>&nbsp;Any degree (graduation) which may be regular or distant. The candidate must hold a degree from any of Universities incorporated by an Act of the Central or State Legislature in India or other educational institutions established by an Act of Parliament or declared to be deemed as a University Under Section-3 of the University Grants Commission Act, 1956, or possess an equivalent qualification.</p>
                <h3>Q. Can final year students of graduation apply for UPSC CSE?</h3>
                <p><strong>Answer:</strong>&nbsp;Yes, candidates who have appeared at an examination the passing of which would render them educationally qualified for the Commissions examination but have not been informed of the results as also the candidates who intend to appear at such a qualifying examination will also be eligible for admission to the Preliminary Examination.</p>
                <h3>Q. When should I produce the proof of passing my graduation examination before UPSC?</h3>
                <p><strong>Answer:</strong>&nbsp;All candidates who are declared qualified by the Commission for taking the Civil Services (Main) Examination will be required to produce proof of passing the requisite examination with their application for the Main Examination failing which such candidates will not be admitted to the Main Examination.</p>
                <h3>Q. I hesitate to apply for Civil Services Exam because I cannot speak fluently in English. Is it possible that I write the Civil Services Main Exam in English and take the interview in Hindi or in any other India Language?</h3>
                <p><strong>Answer:</strong>&nbsp;You need not be afraid of applying for the Civil Services Exam because UPSC give following options in this respect:</p>
                <ul>
                    <li>If you opt to write the Civil Services Main Exam in English, you may choose either english as the medium for interview or Hindi or any other Indian language opted by you for the compulsory Indian Language Paper in the written part of civil services mains examination as the medium for interview. However, if you are exempted from the Compulsory Indian Language paper, you will have to choose either English or Hindi as medium of interview.</li>
                    <li>If you opt for Indian Language medium for the written part of the Civil Services Main Exam, you can choose either the same Indian Language or English or Hindi as the medium for the Interview or Personality Test.</li>
                </ul>
                <h3>Q. If I apply for the Civil Services Prelims Exam but do not appear in any paper will it be counted as an attempt?</h3>
                <p><strong>Answer:</strong>&nbsp;No, an attempt will be counted only if you have appeared in at least one paper.</p>
                <h3>Q. If a candidate belongs to a community included in the OBC list of states but not in the Central list of OBCs is he eligible for age relaxation, reservation etc. for Civil Services Examinations?</h3>
                <p><strong>Answer:</strong>&nbsp;No, only candidates belonging to communities which are included in the Central list of OBC are eligible for such concessions.</p>
                <h3>Q. Can I choose an optional subject (in Mains), which I have not studied at Graduate/PG level?</h3>
                <p><strong>Answer:</strong>&nbsp;Yes, you can choose any optional subject from amongst the UPSC list of optional subjects for Civil Services Main Exam.</p>
                <h3>Q. Can I write different papers of Civil Services Main Exam. in different languages?</h3>
                <p><strong>Answer:</strong>&nbsp;No, you have the option to write your answers either in English or in any one of the languages included in the Eighth schedule to Constitution.</p>
                <h3>Q. Generally, it is advised that the candidates should carefully study the last 10 years question papers of General Studies (Prelims) exam as these give a fair idea as to how the questions are framed from the respective themes of the syllabus and also indicate the difficulty level.</h3>
                <p><strong>Answer:</strong>&nbsp;Yes, previous years papers help the candidates to know the trend, and they must go through these papers again and again.</p>
                <h3>Q. Are individual marks secured in various papers or aggregate marks across all papers considered f or merit?</h3>
                <p><strong>Answer:&nbsp;</strong>Total marks are considered.</p>
                <h3>Q. How tough is the competition in UPSC Civil Services Examination (CSE)?</h3>
                <p><strong>Answer:</strong>&nbsp;You can assess the level of competition from the following data:</p>
                <ul>
                    <li>No. of vacancies advertised every year : Between 1000 and 1200.</li>
                    <li>No. of candidates who filled the form : More than 9,00,000</li>
                    <li>No. of applications who appeared in the Preliminary exam : Almost 4,50,000-5,00,000</li>
                    <li>No. of candidates who qualify the Prelims and become eligible to appear in the Mains Exam : Equal to 12 to 13 times the nos. of vacancies of CSE.</li>
                    <li>Nos. of Candidates who qualify Mains to appear in the Interview : 2-2&frac12; times the Nos. of vacancies in the CSE. Thus, one can say that CSE is one of the tough est competitive examinations.</li>
                </ul>
                <h3>Q. Will there be any exceptions to the above-mentioned educational requirements?</h3>
                <p><strong>Answer:</strong>&nbsp;In exceptional cases the Union Public Service Commission may treat a candidate who has not any of the foregoing qualifications as a qualified candidate provided that he/she has passed examination conducted by the other Institutions, the standard of which in the opinion of the Commission justifies his/her admission to the examination.</p>
                <h3>Q. I possess professional/technical qualification. Am I eligible to appear for UPSC CSE?</h3>
                <p><strong>Answer:&nbsp;</strong>Candidates possessing professional and technical qualifications which are recognised by the Government as equivalent to professional and technical degree would also be eligible for admission to the examination.</p>
                <h3>Q. I have passed MBBS, but not completed internship. Can I appear for UPSC CSE Mains?</h3>
                <p><strong>Answer:&nbsp;</strong>Candidates who have passed the final professional M.B.B.S. or any other Medical Examination but have not completed their internship by the time of submission of their applications for the Civil Services (Main) Examination, will be provisionally admitted to the Examination provided they submit a copy along with their application a copy of certificate from the concerned authority of the University/Institution that they had passed the requisite final professional medical examination, along with their application. In such cases, the candidates will be required to produce at the time of their interview original Degree or a certificate from the concerned competent authority of the University/Institution that they had completed all requirements (including completion of internship) for the award of the Degree.</p>
                <h3>Q. Can I clear IAS exam without attending classroom coaching?</h3>
                <p><strong>Answer:&nbsp;</strong>Yes, you can if you are good at self-study. We are not against classroom coaching. There are good institutes and teachers who help aspirants save a lot of time and effort. But not all coaching institutes provide quality service, so if you wish to join one, do that after proper research. It should also be noted that with the advent of technology, guidance and study materials can be sought online. Our website (Dhyeya IAS) provides free guidance and study materials to lakhs of aspirants who can not afford classroom coaching. You can also learn and compete with thousands of aspirants across India by attempting Dhyeya IAS full length timed online mock test series with negative marking for UPSC Prelims.</p>
                <h3>Q. Will there be an individual cut-off for two papers in Civil Service Prelims?</h3>
                <p><strong>Answer:&nbsp;</strong>The minimum cut off marks for Paper 2 is 33 percent. The Commission may fix a minimum cut-off mark for Paper 1 too.</p>
                <h3>Q. Will there be negative marks or different marks for Preliminary Questions?</h3>
                <p><strong>Answer:&nbsp;</strong>There will be negative marking for incorrect answers for all questions except some of the questions where the negative marking will be inbuilt in the form of different marks being awarded to the most appropriate and not so appropriate answers for such questions.</p>
                <h3>Q. Which stream/subject should I choose for graduation to clear UPSC exam?</h3>
                <p><strong>Answer:&nbsp;</strong>Most of the questions in the general studies paper in Prelims and Mains are related to Humanities background. But it is neither necessary nor advisable to take Humanities as your graduation stream just to clear UPSC exam. Graduation should be based on your interest &ndash; it can be humanities, science, engineering, literature or management. For graduation, select any stream you like to study for 3-4 years. You are free to choose any optional subject for UPSC Mains and it may not be the one you studied for graduation.</p>
                <h3>Will there be minimum qualifying marks for UPSC Mains Compulsory Papers?</h3>
                <p><strong>Answer:&nbsp;</strong>The Commission has the discretion to fix qualifying marks in any or all the subjects of the examination. Since 2015, the minimum mark were 25% for Indian language and English langu age. For GS1, GS2, GS3 and GS4 the minimum marks expected are 10%.</p>
                <h3>Q. Will UPSC deduct marks for bad handwriting?</h3>
                <p><strong>Answer:</strong>&nbsp;If a candidates handwriting is not easily legible, a deduction will be made on this account from the total marks otherwise accruing to him.</p>
                <h3>Q. Will there be minimum qualifying marks for UPSC Interview?</h3>
                <p><strong>Answer:&nbsp;</strong>The interview will carry 275 marks (with no minimum qualifying marks).</p>
                <h3>Q. Can candidates use calculators in UPSC Civil Services Exam?</h3>
                <p><strong>Answer:&nbsp;</strong>Not for UPSC Civil Services Preliminary Exam. But candidates will be allowed to use the Scientific (Non-Programmable type) Calculators at the subjective type examination of UPSC, ie Mains Exam. Programmable type calculators will not however be allowed and the use of such calculators shall tantamount to resorting to unfair means by the candidates. Loaning or interchanging of calculators in the Examination Hall is not permitted. It is also important to note that candidates are not permitted to use calculators for answering objective type papers (Test Booklets). They should not, therefore, bring the same inside the Examination Hall.</p>
                <h3>Q. Is coaching important?</h3>
                <p><strong>Answer:&nbsp;</strong>This is one of the most frequently asked questions. UPSC has been constantly changing its pattern over the years to make the civil services exam preparation accessible and possible to students from every set of background. Its Endeavour is to neutralize the effect of coaching so that all candidates come on a equal platform. However, the fact remains &ndash; most of the candidate who succeed have taken coaching at some point of their preparation. This is chiefly due to:</p>
                <ul>
                    <li>The vast syllabus, especially in general studies which the candidates find very difficult to do on their own in a shortest possible period. Moreover, the students are flooded with so many books that they get confused about consulting which ones. Class notes and Material provide a solution to this.</li>
                    <li>The candidates many times in their quest for acquiring knowledge lose track of time. They overdo the studies in some subjects at the cost of others. Coaching institutes cover the syllabus within the time period and thus are sought after.</li>
                </ul>
                <p>However, the need for coaching could be removed wholly if the candidates could get the right study material and the right guidance for the examination.</p>
                <p>A word of caution also needs to be included here. If a candidate has made his mind to enroll himself in any coaching, he must go for the best reputed ones. There are many coaching institutes which advertise very attractively, boasting on claims for producing toppers, which is many times false. The candidates who get attracted eventually land up in these institutes which take a toll on their valuable time, money and energy. The candidates must personally make queries about the coaching institutes, asking the students who were previously enrolled and then, only making right decisions.</p>
                <h3>Q. Should we prepare our own Notes?</h3>
                <p><strong>Answer:&nbsp;</strong>Nothing could be better than this. However, the problem comes when one considers the wide syllabus, which is too vast if we include two optional papers and the general studies which in turn comprises so many subjects.</p>
                <p>One can decide to pair his own notes in those areas in which one is weak, or there are many sources to consult, or on those topics which are very important from the examination point of view. Otherwise, it will be a Herculean task to prepare notes on individual topics.</p>
                <p>But those candidates who have decided to appear in civil services exam during their graduation years may go for this as they have ample time to contribute.</p>
                <h3>Q. How many hours of study are sufficient?</h3>
                <p><strong>Answer:&nbsp;</strong>The answer is as many hours as you can study efficiently. In civil services preparation, there is never a time when one feels that there is nothing more to study. So, what exactly matters is the quality of studying rather quantity of reading. First the difference between "studying" and "reading" should be understood. Reading means mere verbalisation of the written texts. What lacks here is understanding. When understanding adds to "Reading &ndash; it becomes studying". So the issue how many hours you can sit and read the text with understanding also connotes to analysis, deep processing of information, interrelating with your past knowledge base and making a view on the topic. Reading on the other hand is merely a passive activity where involvement of the reader is the least.</p>
                <p>We can thus conclude that studying for 8 hours is many times more fruitful than reading for 16 hours. That is to say "Quality" is more important than the "Quantity" invested.</p>
                <h3>Q. Can an average student also compete with the rest?</h3>
                <p><strong>Answer:</strong>&nbsp;An average student has an added advantage as he knows his limitations. He knows he does not have any time to waste. The intelligent ones feel they have the ability to start late and end early ... and they lose at the end. The tortoise rabbit story is not obsolete yet.</p>
                <p>In fact, most of the students who succeed in the Civil service were very ordinary students in their academics. But they knew, how add "extra" into "ordinary" to become "extraordinary". That extra is provided by their firm<br>determination, an honest self-assessment and foolproof planning followed by strict implementation. In short, the hard work put in by them ultimately lands them at the summit of success.</p>
                <h3>Q. How does a good bio-data matter?</h3>
                <p><strong>Answer:&nbsp;</strong>Bio-data matters during the interview and personality test (i.e. during the third phase). Personality test is based wholly or mostly on the basis of bio-data and the questions are framed on information provided by you. In fact, the-then personality is judged by the interview board on the parameters of suitability of candidates for the job. However, a bad bio-data may give some unfavourable impression on the members of the board and thus, a kind of judgment is formed by them consciously or unconsciously.</p>
                <p>At the same time the members of the board are very experienced and they give full opportunity to candidates to thwart any pre-notions formed by the bio-data. So, the candidates by their performance in the interview have full opportunity to score high in the Interview.</p>
                <p>But, the idea is that those candidates who are in their early academic years should try and see that their biodata is without any shortcomings.</p>
                <h3>Q. Could the civil services questions be answered in the regional languages?</h3>
                <p><strong>Answer:&nbsp;</strong>Yes, aspirants can write answers in any language provided in the eighth schedule of the constitution of India.</p>
                <h3>Q. Preparation for Preliminary and Mains &ndash; Separate or Integrated?</h3>
                <p><strong>Answer:&nbsp;</strong>Can knowledge be compartmentalized? No, in fact it is an integrated whole which gives a comprehensive understanding. Same holds true for the preparation. The whole subject should be understood in its entirety. Only then the requirement for the Preliminary and Mains could be fulfilled through particular emphasis on the orientation. The orientation for Prelims is towards a mix of factual information and understanding with a bias towards the former.</p>
                <h3>Q. When should one take his first attempt irrespective of the fact how many attempts the candidate has?</h3>
                <p><strong>Answer:&nbsp;</strong>Many candidates appear in their first attempt taking it to be a learning experience. This is the biggest mistake they commit. UPSC attempts are very precious ones. Many candidates regret wasting their first attempt and wish if they had one they would have cracked the exam. The candidates must be very serious before appearing in the preliminary exam. They must complete the whole syllabus in their optional as well as general studies. They must check their performance by taking mock tests at home and work out the weak areas. The greatest benefit of the whole exercise is that there is a high probability that they get through the preliminary exam. If unfortunately, they could not, at least they came to know their grey and weak areas on which they need to concentrate. This enlightenment benefits them immensely in their next attempt. Those who waste their first attempt do not come to know about their shortcomings and in this situation may even waste their other attempts.</p>
                <h3>Q. How to select the optionals?</h3>
                <p><strong>Answer:&nbsp;</strong>This has been answered earlier too. The basic criteria are in same sequence of importance.</p>
                <ul>
                    <li>Interest.</li>
                    <li>Availability of study material and guidance.</li>
                    <li>Gap between the optionals during the Mains exam.</li>
                    <li>Scoring optionals &ndash; trend prevailing.</li>
                </ul>
                <h3>Q. Speaking English during an Interview &ndash; How important is it?</h3>
                <p><strong>Answer:&nbsp;</strong>UPSC holds personality tests and interviews in English, Hindi and all other languages in the 8th schedule &ndash; i.e. 22 languages, provided the candidates writes all the papers ()optional and general studies) in the same language. Also, UPSC through the Civil Services exam tries to dig out the best brains in the country, who could contribute in development and progress of the nation. It is thus a wrong notion to hold that the UPSC is language-biased. However, the candidates themselves need to learn English for their own sake as during their long career in civil services they have to come across so many occasions where they will have to communicate with various kind of organisations, institutions, seniors and people and during such a situation, language should not be a limitation.</p>
                <h3>Q. When I see people around me who do not have final get selected in the prestigious services, then I lose self- confidence. What should I do in this situation?</h3>
                <p><strong>Answer:</strong>&nbsp;Generally, we see most of the people around us who are not selected. Seeing them, your self-confidence should not be reduced because everyone has a different strategy. We should always remember that most of the candidates who are finally selected are also from us.</p>
                <p>Not only information and knowledge is sufficient for the final selection but also keeping in mind the demand of the examination and importance of contemporary issue in answer-writing is important.</p>
                <h3>Q. Failure can be for several reasons:</h3>
                <p><strong>Answer:</strong></p>
                <ul>
                    <li>Time is limited in the examination hall, despite being, aware of the questions, one is not able to express correctly because one has not practiced properly.</li>
                    <li>Pressure management just before the examination is not done properly, so that the answer to the known question with the correct information goes wrong too.</li>
                    <li>Lack of Right Guidance on strategy.</li>
                    <li>No assessment of ability of a aspirant regarding time management, use of fact and writing style.</li>
                </ul>
                <p><strong>Solution</strong></p>
                <ul>
                    <li>Keep a positive view, meet successful people, ignore negative thought.</li>
                    <li>Do not loose your self-confidence, you have immense potential use it to achieve your goal honestly.</li>
                    <li>Identify your short-comings and try to remove them. Go ahead with your determination by choosing your own way.</li>
                </ul>
                <h3>Q. Family pressure is high on girls due to which there is no consideration in studies, what to do for it.</h3>
                <ul>
                    <li>Stay focused on your goal, concentrate with your full passion and energy to achieve your goals.</li>
                    <li>Take your parents and family in confidence which will in turn help you achieve your goal.</li>
                    <li>If success is achieved in the 1st stage, the trust of the parents and family increase and therefore work hard to achieve the goal in first go itself.</li>
                    <li>Do not think negatively for the next set of problems, try to improve the present. Become an inspiration for yourself, set small goals and fulfil them, thereby strengthening self-confidence.</li>
                </ul>
                <h3>Q. I have got only one year time duration for preparation. Can I become an IAS in such a short period of time?</h3>
                <p><strong>Answer:</strong>&nbsp;Well, for the preparation of the IAS Exam, one or two years of intensive study is required because the syllabus is very wide and its is also necessary to have an understanding and hold on the subject and it takes a little time, but with the right strategy, better guidance, perseverance it can be done in one year also.</p>
                <p>Aspirants family background, academic ability and his basic understanding, plays a very decisive role. If everything is positive and favourable then success can be achieved even in one year by hard work.</p>
                <h3>Q. How to read NCERT books?</h3>
                <p><strong>Answer:</strong>&nbsp;In NCERT syllabus subject matter is given in the form of stories and very simple language is used. Try to understand the theme of the story and link them with contemporary world.</p>
                <ul>
                    <li>It is like the ocean in the Gorge.</li>
                    <li>NCERT develops your understanding ability and play the foundational role in you preparation .</li>
                    <li>Try to solve the questions given in the book, this will improve your writing style and also the grip on the subject will become strong.</li>
                </ul>
                <h3>Q. Is it mandatory to read India Year Book?</h3>
                <p><strong>Answer:&nbsp;</strong>Must be read, as it contains detailed information on the Governments plans, policies and the achievements of the government and challenges before it.</p>
                <ul>
                    <li>If the whole book is not possible then read some selected chapters for example Environment, Finance, Culture and tourism etc. Communication and information technology, justice and law, Health and Family welfare, India and the world, Water resources, National Events, Scientific and Technological development etc.</li>
                    <li>These chapters are very important in terms of exam. Use them according to the syllabus.</li>
                </ul>
                <h3>Q. How helpful is the Test Series in preparation?</h3>
                <p><strong>Answer:</strong></p>
                <ul>
                    <li>Extremely helpful, because we get atmosphere resembling the examination hall and performing well strengthen our mental abilities.</li>
                    <li>Through Test Series we evaluate our self-preparation because we cover whole syllabus in accordance with test series schedule that will benefit us in the exam. Test Series also motivate us to perform well under pressure.</li>
                    <li>If we get good score in test series, our self-confidence goes up and it also inspire us to work hard.</li>
                </ul>
                <h3>Q. If I am working then how can I prepare for the UPSC exam?</h3>
                <p><strong>Answer:&nbsp;</strong>Nature of the job will matter, you will have to adjust with your routine, as well as time management also becomes important as quality of study is more important than the quantity.</p>
                <ul>
                    <li>Target should set weekly, so that you do not feel bored. Confidence will also increase on completion of weekly target.</li>
                    <li>utilize weekend very well, revise what you have read throughout the week, assess your preparation through the tests.</li>
                    <li>Handling pressure needs a smart strategy, revise whatever you read, read selectively, and also work on writing skills.</li>
                </ul>
            </div>
        </div>
    </section>'
            ]
        ]
    ],
    ////######################################################################################################################
       /*[
           "only_post" => [
               "post_type" => "book_section",
               "user_id" => 1,
               "slug" => "book_section",
               "status" => "active",
               "hi" => [
                   "title" => "book_section",
               ],
               "en" => [
                   "title" => "book_section",
               ]
           ]
       ],*/
////######################################################################################################################
];
