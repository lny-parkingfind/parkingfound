@extends('inc.layout')

@section('main')
    <body>
        <div class="header-main">
            <div class="header-main-title">
                주차를 편리하게<br>오늘도 안전하게!
            </div>
            <div class="header-main-minititle">
                파킹파운더는 여러분의 주차 공간을 찾는 불편함을 <br> 
                해소합니다. 최신 기술과 빠른 예약시스템으로 <br> 
                여러분의 차량을 안전하게 주차할 곳을 찾아 드립니다.
            </div>
            <a href="" class="header-map">
                <img class="header-map-img" src="/img/네비게이션.png">
                내 주변 주차장 찾기
            </a>
            <div class="img"></div>
        </div>
        <main>
            <div class="popular">
                <h1 class="popular-title">지금 가장 인기 있는 주차장</h1>
                <div class="popular-container">
                    <div class="popular-img">
                        <img src="/img/3.jpg">
                        <div class="popular-dox">
                            <div class="popular-title">대구~~주차장</div>
                            <div class="popular-content">서구</div>
                        </div>
                    </div>
                    <div class="popular-img">
                        <img src="/img/3.jpg">
                        <div class="popular-dox">
                            <div class="popular-title">대구~~주차장</div>
                            <div class="popular-content">서구</div>
                        </div>
                    </div>
                    <div class="popular-img">
                        <img src="/img/3.jpg">
                        <div class="popular-dox">
                            <div class="popular-title">대구~~주차장</div>
                            <div class="popular-content">서구</div>
                        </div>
                    </div>
                    <div class="popular-img">
                        <img src="/img/3.jpg">
                        <div class="popular-dox">
                            <div class="popular-title">대구~~주차장</div>
                            <div class="popular-content">서구</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book">
                <h1 class="book-title">편리한 주차 공간 예약하기</h1>
                <h2 class="book-title2">예약시스템으로 더욱 편리하게</h2>
                <h4 class="book-content">
                    <img src="/img/패스 4.png">
                    당신의 자동차를 안전하게 주차하세요
                </h4>
                <h4 class="book-content2">
                    <img src="/img/패스 4.png">
                    스트레스 없는 주차하세요
                </h4>
                <a href="">예약하기</a>
                <img src="/img/5.jpg" class="book-img">
                <img src="/img/그룹 10.png" class="book-img2">
                <img src="/img/그룹 9.png" class="book-img3">
            </div>
            <div class="book-chk">
                <img src="/img/4.png" class="b-chk-img">
                <h1 class="b-chk-title">내 예약 확인하기</h1>
                <h2 class="b-chk-title2">예약 정보를 손쉽게 확인하세요!</h2>
                <h4 class="b-chk-content">예약한 주차장의 정보를 한눈에 확인할 수 있습니다.</h4>
                <h4 class="b-chk-content">예약한 주차장의 날짜, 시간, 장소 등을 간편하게 파악하여</h4>
                <h4 class="b-chk-content">변경이나 취소가 필요한 경우 쉽게 관리할 수 있습니다.</h4>
                <h4 class="b-chk-content">사용자 편의를 위해 간결하고 직관적인 디자인으로 구성되어 있습니다.</h4>
                <a href="">내 예약 확인하기</a>
            </div>
            <div class="qna-container">
                <h1 class="qna">자주 묻는 질문</h1>
                <a href="">Q & A</a>
                <div class="qna-title">
                    주차 요금은 어떻게 결제하나요?
                </div>
                    <img src="/img/그룹 1.png" class="qna-plus"></img>
                <div class="qna-title">
                    주차 공간을 예약하려면 어떻게 해야하나요?
                </div>
                    <img src="/img/그룹 1.png" class="qna-plus"></img>
                <div class="qna-title">
                    주차장의 운영시간은 어떻게 되나요?
                </div>
                    <img src="/img/그룹 1.png" class="qna-plus"></img>
                <div class="qna-title">
                    주차장 내에서의 주행속도 제한이 있나요?
                </div>
                    <img src="/img/그룹 1.png" class="qna-plus"></img>
                <div class="qna-title">
                    주차장에 장애인 전용 주차 공간이 있나요?
                </div>
                    <img src="/img/그룹 1.png" class="qna-plus"></img>
            </div>
            <div class="event-container">
                <div class="event">
                    <div class="event-title">
                        신규 가입 고객 대상! <br>
                        첫 예약 시 50% 할인 혜택을 놓치지 마세요. <br>
                        파킹파운더와 함께라면 편안한 주차가 가능합니다.
                    </div>
                    <img src="/img/6.PNG">
                </div>
            </div>
        </main>
    </body>
    </html>
@endsection