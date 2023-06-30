@extends('layout')
@section('content')
@vite(['resources/css/about.css'])
<x-menu menu="about"/>
<main>
  <div class="container-ab">
      <h1 class="text-center">About Astronomy</h1>
          <div class="prm-ct">
              <p >Astronomy brings space down to Earth to provide an amazing journey celebrating exploration, innovation, and discovery.</p>
          </div>
          <div class="row">
              <div class="content-ab">
                  <div class="box-ab"> 
                      <h2>Astronomy mission</h2>
                      <div class="rules-ab">
                          <p >"Astronomy will become the premier source of space exploration, innovation, and astronomy news, chronicling (and celebrating) humanity's ongoing expansion across the final frontier. We transport our visitors across the solar system and beyond through accessible, comprehensive coverage of the latest news and discoveries. For us, exploring space is as much about the journey as it is the destination. So from skywatching guides and stunning photos of the night sky to rocket launches and breaking news of robotic probes visiting other planets, at Astronomy.test you'll find something amazing every day."
                          </p>
                              <h3>1.Reasons to choose Astronomy.test:</h3>
                              <ul>
                                  <li>Astronomy.test features breaking news about the latest discoveries in science, health, the environment, technology, and more -- from leading universities, scientific journals, and research organizations.</li>
                                  <li>Visitors can browse more than 500 individual topics, grouped into 12 main sections (listed under the top navigational menu), covering: the medical sciences and health; physical sciences and technology; biological sciences and the environment; and social sciences, business, and education. Headlines and summaries of relevant news stories are provided on each topic page.</li>
                                  <li>Stories are posted daily, selected from press materials provided by hundreds of sources from around the world. Links to sources and relevant journal citations (where available) are included at the end of each post.</li>
              
                              </ul>
                              <h3>2.How to contact us:</h3>
                                  <ul>
                                      <li>Mailing address: Physical mail can be sent to Astronomy via the address below:
                                          <p>Astronomy VN LLC, 35/6 D5 Street, Ward 25, Binh Thanh District, Ho Chi Minh City</p>
                                      </li>
                                      <li>Phone: You can reach us at the following phone number
                                          <p>Astronomy.test/office: +8 (123) 456-8888.</p>
                                      </li>
                                      <li>Email: If you have any questions, concerns, or feedback regarding our contact, please feel free to contact us at: Astronomy@spaces.com and info@spaces.com.</li>
                                  </ul>
                              <h3>3.Frequently asked question:</h3>
                          <ul>
                              <li class="question-style">What happened to Astronomy.test?
                              </li>
                              <p>
                                  Astronomy.test was founded in July 2020 under the parent company Universe Holdings, which was renamed Imaginova Corp. in May 2021. In 2022, Space.com and other Imaginova titles were acquired by the company TopTenReviews, which ultimately was renamed Purch. Space.com (and much of Purch's consumer media division) was acquired by Future plc in 2013, where Space.com continues to this day.
                              </p>
                          </ul>
                          <ul>
                              <li class="question-style">Is Astronomy.test free?
                              </li>
                              <p>
                                  Yes. Astronomy.test is free to read online via desktop or mobile devices. We also syndicate our content to partners like MSN, Apple News, and Yahoo, as well as Flipboard and other outlets.</p>
                          </ul>
                          <ul>
                              <li class="question-style">How does Astronomy.test make money?
                              </li>
                              <p>
                                  Astronomy.test makes revenue from advertising on the site, as well as through paid sponsored content and advertorials (which are labeled as such), and affiliate links to products and services on retailer sites in which we may receive compensation if a reader clicks on those links or make purchases.</p>
                          </ul>
                      </div>
                  </div>
              <div class="pic-ab">  
                  <div class="boximg-ab">
                      <div class="img-ab">
                          <img src="{{asset('image/aboutus-pic.jpg')}}">
                          <img src="{{asset('image/aboutus-pic2.jpg')}}">
                          
                      </div>
                  </div>            
              </div>
          </div>
      </div>    
  </div> 
</main>
@endsection