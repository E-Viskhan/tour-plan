    <?php @include('header.php') ?>
    <nav class="breadcrumb">
      <div class="container">
        <ol class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ol>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars hotel__stars">
                <img class="icon-star" src="img/star.svg" alt="icon star" />
                <img class="icon-star" src="img/star.svg" alt="icon star" />
                <img class="icon-star" src="img/star.svg" alt="icon star" />
                <img class="icon-star" src="img/star.svg" alt="icon star" />
                <img class="icon-star" src="img/star.svg" alt="icon star" />
              </div>
              <h1 class="hotel-name hotel-info__name">grand hilton hotel</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <p class="hotel-description hotel-info__description">
              Half-Board/ All Inclusive + Complimentary Activities + Child Stays
              Free
            </p>
          </div>
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">4.5/5</span>
          </div>
          <!-- /.hotel-info__rating -->
        </div>
        <!-- /.hotel-info -->
        <div class="hotel-grid">
          <!-- Slider main container -->
          <div class="swiper hotel-slider hotel__slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper hotel-slider__wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__slide">
                <img
                  class="hotel-slider__img"
                  src="img/slide.jpg"
                  alt="slide 1"
                />
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img
                  class="hotel-slider__img"
                  src="img/slide-2.jpg"
                  alt="slide 2"
                />
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img
                  class="hotel-slider__img"
                  src="img/slide-3.jpg"
                  alt="slide 3"
                />
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img
                  class="hotel-slider__img"
                  src="img/slide-4.jpg"
                  alt="slide 4"
                />
              </div>
              <div class="swiper-slide hotel-slider__slide">
                <img
                  class="hotel-slider__img"
                  src="img/slide-5.jpg"
                  alt="slide 5"
                />
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <button
              class="hotel-slider__button hotel-slider__button--prev"
            ></button>
            <button
              class="hotel-slider__button hotel-slider__button--next"
            ></button>
          </div>
          <!-- /.swiper -->
          <div class="hotel-right">
            <div class="booking hotel__booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__pricetag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!-- /.booking__price -->
                <div class="booking__room">
                  <div class="booking__text">
                    <img
                      src="img/user.svg"
                      alt="Icon: user"
                      class="booking__icon"
                    />
                    <span class="booking__description">2 x Guests</span>
                  </div>
                  <!-- /.booking__text -->
                  <div class="booking__text">
                    <img
                      src="img/home.svg"
                      alt="Icon: home"
                      class="booking__icon"
                    />
                    <span class="booking__description">1 x Room</span>
                  </div>
                  <!-- /.booking__text -->
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- /.booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a class="booking__number" href="tel:12100">
                  <img src="img/phone-call.svg" alt="Icon: phone" />
                  <span class="booking__num">12100</span>
                </a>
              </div>
              <!-- /.booking__call-center -->
              <button data-toggle="modal" class="button booking__button">
                View Other Options
              </button>
            </div>
            <!-- /.booking -->
            <div class="ymap-container">
              <div class="loader loader-default"></div>
              <div class="map map-yandex" id="map"></div>
              <!-- /.map -->
            </div>
            <!-- /.ymap-container -->
          </div>
          <!-- /.hotel-right -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <section class="packages">
      <div class="container">
        <h2 class="packages__title">Other Packages</h2>
        <div class="packages-wrapper">
          <div
            class="packages-card main-package"
            data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1500"
            data-aos-delay="300"
          >
            <div class="packages__image-wrapper main-package__image-wrapper">
              <img
                src="img/package-1.jpg"
                alt="Package image"
                class="packages__image main-package__image"
              />
              <button class="offer packages__offer main-package__offer">
                Flash Offer
              </button>
            </div>
            <!-- /.packages__image-wrapper -->
            <div class="packages__info main-package__info">
              <div class="stars main-package__rating">
                <img class="icon-star" src="img/star.svg" alt="icon star" />
                <img class="icon-star" src="img/star.svg" alt="icon star" />
                <img class="icon-star" src="img/star.svg" alt="icon star" />
                <img class="icon-star" src="img/star.svg" alt="icon star" />
                <img class="icon-star" src="img/star.svg" alt="icon star" />
              </div>
              <!-- /.main-package__rating -->
              <h3 class="packages-card__title main-package__title">
                Hotel Blue Haven
              </h3>
              <p class="main-package__text">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
                enim laborum magna llit. Ipsum est fugiat velit ea llamco do
                esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum occaecat eiusmod nsectetur enim laborum magna
                mollit. Ipsum est fugiat velit ea ullamco do
              </p>
              <div class="packages-card__more-info main-package__more-info">
                <!-- prettier-ignore -->
                <span class="packages-card__address"
                  >1749 Wheeler Ridge  Delaware</span
                >
                <span class="packages-card__number-guests">2 x Guests</span>
                <span class="packages-card__number-rooms">1 x Room</span>
              </div>
              <!-- /.packages-card__more-info -->
              <div class="packages-card__order-info main-package__order-info">
                <span class="packages-card__old-price">$ 10,500</span>
                <span class="packages-card__current-price">$ 8,500</span>
                <button data-toggle="modal" class="packages-card__book-now">Book Now</button>
              </div>
              <!-- /.packages-card__order-info -->
            </div>
            <!-- /.packages__info -->
          </div>
          <!-- /.packages-card -->
          <div
            class="packages-card"
            data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1500"
            data-aos-delay="300"
          >
            <div class="packages__image-wrapper">
              <img
                src="img/package-2.jpg"
                alt="Package image"
                class="packages__image"
              />
              <button class="offer packages__offer">Flash Offer</button>
            </div>
            <!-- /.packages__image-wrapper -->
            <div class="packages__info">
              <h3 class="packages-card__title">LUX* Belle Mare</h3>
              <div class="packages-card__more-info">
                <!-- prettier-ignore -->
                <span class="packages-card__address"
                  >1749 Wheeler Ridge  Delaware</span
                >
                <span class="packages-card__number-guests">2 x Guests</span>
                <span class="packages-card__number-rooms">1 x Room</span>
              </div>
              <!-- /.packages-card__more-info -->
              <div class="packages-card__order-info">
                <span class="packages-card__old-price">$ 8,500</span>
                <span class="packages-card__current-price">$ 3,000</span>
                <button data-toggle="modal" class="packages-card__book-now">Book Now</button>
              </div>
              <!-- /.packages-card__order-info -->
            </div>
            <!-- /.packages__info -->
          </div>
          <!-- /.packages-card -->
          <div
            class="packages-card"
            data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1500"
            data-aos-delay="300"
          >
            <div class="packages__image-wrapper">
              <img
                src="img/package-3.jpg"
                alt="Package image"
                class="packages__image"
              />
              <button class="offer packages__offer">Flash Offer</button>
            </div>
            <!-- /.packages__image-wrapper -->
            <div class="packages__info">
              <h3 class="packages-card__title">White Palace</h3>
              <div class="packages-card__more-info">
                <!-- prettier-ignore -->
                <span class="packages-card__address"
                  >1749 Wheeler Ridge  Delaware</span
                >
                <span class="packages-card__number-guests">2 x Guests</span>
                <span class="packages-card__number-rooms">1 x Room</span>
              </div>
              <!-- /.packages-card__more-info -->
              <div class="packages-card__order-info">
                <span class="packages-card__old-price">$ 10,500</span>
                <span class="packages-card__current-price">$ 9,500</span>
                <button data-toggle="modal" class="packages-card__book-now">Book Now</button>
              </div>
              <!-- /.packages-card__order-info -->
            </div>
            <!-- /.packages__info -->
          </div>
          <!-- /.packages-card -->
          <div
            class="packages-card"
            data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1500"
            data-aos-delay="300"
          >
            <div class="packages__image-wrapper">
              <img
                src="img/package-4.jpg"
                alt="Package image"
                class="packages__image"
              />
              <button class="offer packages__offer">Flash Offer</button>
            </div>
            <!-- /.packages__image-wrapper -->
            <div class="packages__info">
              <h3 class="packages-card__title">Luxury Place</h3>
              <div class="packages-card__more-info">
                <!-- prettier-ignore -->
                <span class="packages-card__address"
                  >1749 Wheeler Ridge  Delaware</span
                >
                <span class="packages-card__number-guests">2 x Guests</span>
                <span class="packages-card__number-rooms">1 x Room</span>
              </div>
              <!-- /.packages-card__more-info -->
              <div class="packages-card__order-info">
                <span class="packages-card__old-price">$ 4,500</span>
                <span class="packages-card__current-price">$ 2,500</span>
                <button data-toggle="modal" class="packages-card__book-now">Book Now</button>
              </div>
              <!-- /.packages-card__order-info -->
            </div>
            <!-- /.packages__info -->
          </div>
          <!-- /.packages-card -->
          <div
            class="packages-card"
            data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1500"
            data-aos-delay="300"
          >
            <div class="packages__image-wrapper">
              <img
                src="img/package-5.jpg"
                alt="Package image"
                class="packages__image"
              />
              <button class="offer packages__offer">Flash Offer</button>
            </div>
            <!-- /.packages__image-wrapper -->
            <div class="packages__info">
              <h3 class="packages-card__title">Hotel Five Star</h3>
              <div class="packages-card__more-info">
                <!-- prettier-ignore -->
                <span class="packages-card__address"
                  >1749 Wheeler Ridge  Delaware</span
                >
                <span class="packages-card__number-guests">2 x Guests</span>
                <span class="packages-card__number-rooms">1 x Room</span>
              </div>
              <!-- /.packages-card__more-info -->
              <div class="packages-card__order-info">
                <span class="packages-card__old-price">$ 6,500</span>
                <span class="packages-card__current-price">$ 3,500</span>
                <button data-toggle="modal" class="packages-card__book-now">Book Now</button>
              </div>
              <!-- /.packages-card__order-info -->
            </div>
            <!-- /.packages__info -->
          </div>
          <!-- /.packages-card -->
        </div>
        <!-- /.packages-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <section class="newsletter newsletter-parallax">
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title newsletter__title">
          <span class="newsletter-title__text">subscribe to our</span>
          <span class="newsletter-title__strong">Newsletter</span>
        </h2>
        <form
          action="send.php"
          method="POST"
          class="form subscribe newsletter__subscribe"
        >
          <input
            type="email"
            class="subscribe__input"
            placeholder="Your email address"
            name="emailNewsletter"
            required
          />
          <button type="submit" class="subscribe__button">Send</button>
        </form>
      </div>
    </section>
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">What people think about us</h2>
        <div class="swiper reviews-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/reviews-avatar.jpg"
                    alt="Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="stars reviews-slider__rating">
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/reviews-avatar-2.jpg"
                    alt="Robert Johns"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Robert Johns</h3>
                  <span class="reviews-slider__date">Stayed 14 Sep, 2019</span>
                  <div class="stars reviews-slider__rating">
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/reviews-avatar-3.jpg"
                    alt="Juli Carty"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__username">Juli Carty</h3>
                  <span class="reviews-slider__date">Stayed 5 June, 2019</span>
                  <div class="stars reviews-slider__rating">
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                    <img class="icon-star" src="img/star.svg" alt="icon star" />
                  </div>
                  <!-- /.reviews-slider__rating -->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </p>
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!-- /.swiper-slide -->
          </div>
          <!-- /.swiper-wrapper -->
          <button
            class="reviews-slider__button reviews-slider__button--prev"
          ></button>
          <button
            class="reviews-slider__button reviews-slider__button--next"
          ></button>
        </div>
        <!-- /.reviews-slider -->
      </div>
      <!-- /.container -->
    </section>
    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div
            class="card activities__card"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <img
              src="img/activity-1.jpg"
              alt="The curious corner of chamarel"
              class="card__image"
            />
            <h3 class="card__title">The curious corner of&nbsp;chamarel</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div
            class="card activities__card"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <img
              src="img/activity-2.jpg"
              alt="Gymkhana club golf course"
              class="card__image"
            />
            <h3 class="card__title">Gymkhana club golf course</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div
            class="card activities__card"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <img
              src="img/activity-3.jpg"
              alt="Tamarind falls hiking trip - full day"
              class="card__image"
            />
            <h3 class="card__title">
              Tamarind falls hiking trip&nbsp;-&nbsp;full day
            </h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
          <div
            class="card activities__card"
            data-aos="fade-up"
            data-aos-delay="700"
          >
            <img
              src="img/activity-4.jpg"
              alt="The blue marine discovery quest"
              class="card__image"
            />
            <h3 class="card__title">The blue marine discovery quest</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.activities-wrapper -->
      </div>
      <!-- /.container -->
    </section>
    <?php  @include('footer.php') ?>
