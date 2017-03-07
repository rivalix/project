<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="widget js-widget">
  <div class="widget__content">
    <div class="map map--index">
      <div class="map__buttons">
        <button type="button" class="map__change-map js-map-btn">Property Map</button>
      </div>
      <div class="map__wrap">
        <div data-infobox-theme="white" class="map__view js-map-index-canvas"></div>
      </div>
      <div class="container">
        <div class="map__search">
          <!-- BEGIN SEARCH-->
          <form action="properties_listing_list.html" class="form form--flex form--search js-search-form form--banner-sidebar form--white">
            <div class="row">
              <div class="form-group">
                <label for="in-keyword" class="control-label">Keyword</label>
                <input type="text" id="in-keyword" placeholder="Text" class="form-control">
              </div>
              <div class="form-group">
                <label for="in-contract-type" class="control-label">Listing Type</label>
                <select id="in-contract-type" data-placeholder="---" class="form-control">
                  <option label=" "></option>
                  <option>Sale</option>
                  <option>Rent</option>
                </select>
              </div>
              <div class="form-group"><span class="control-label">Property type</span>
                <div class="dropdown dropdown--select">
                  <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn">---</button>
                  <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                    <ul>
                      <li>
                        <input id="checkbox_type_1" type="checkbox" name="checkbox_type_1" class="in-checkbox">
                        <label for="checkbox_type_1" data-toggle="tooltip" data-placement="left" title="Tooltip on top" class="in-label">Privat apartment</label>
                      </li>
                      <li>
                        <input id="checkbox_type_2" type="checkbox" name="checkbox_type_2" class="in-checkbox">
                        <label for="checkbox_type_2" data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="in-label">Apartment</label>
                      </li>
                      <li>
                        <input id="checkbox_type_3" type="checkbox" name="checkbox_type_3" class="in-checkbox">
                        <label for="checkbox_type_3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                      </li>
                      <li>
                        <input id="checkbox_type_4" type="checkbox" name="checkbox_type_4" class="in-checkbox">
                        <label for="checkbox_type_4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                      </li>
                      <li>
                        <input id="checkbox_type_5" type="checkbox" name="checkbox_type_5" class="in-checkbox">
                        <label for="checkbox_type_5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">House</label>
                      </li>
                      <li>
                        <input id="checkbox_type_6" type="checkbox" name="checkbox_type_6" class="in-checkbox">
                        <label for="checkbox_type_6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                      </li>
                      <li>
                        <input id="checkbox_type_7" type="checkbox" name="checkbox_type_7" class="in-checkbox">
                        <label for="checkbox_type_7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                      </li>
                      <li>
                        <input id="checkbox_type_8" type="checkbox" name="checkbox_type_8" class="in-checkbox">
                        <label for="checkbox_type_8" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                      </li>
                      <li>
                        <input id="checkbox_type_9" type="checkbox" name="checkbox_type_9" class="in-checkbox">
                        <label for="checkbox_type_9" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                      </li>
                      <li>
                        <input id="checkbox_type_10" type="checkbox" name="checkbox_type_10" class="in-checkbox">
                        <label for="checkbox_type_10" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                      </li>
                    </ul>
                    <!-- end of block .dropdown-menu-->
                  </div>
                </div>
              </div>
              <div class="form-group"><span class="control-label">Location level 1</span>
                <div class="dropdown dropdown--select">
                  <button type="button" data-toggle="dropdown" data-placeholder="States" class="dropdown-toggle js-select-checkboxes-btn">States</button>
                  <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                          <div class="region-select">
                            <ul class="js-checkboxes-tree bonsai region-select__list">
                              <li>
                                      <input type="checkbox" name="location[]" value="Fresno" id="region-select-states-0" class="in-checkbox">
                                      <label for="region-select-states-0" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                <ul>
                                  <li>
                                          <input type="checkbox" name="location[]" value="Clovis" id="region-select-states-1" class="in-checkbox">
                                          <label for="region-select-states-1" data-toggle="tooltip" data-placement="top" title="Clovis" class="in-label">Clovis</label>
                                  </li>
                                  <li>
                                          <input type="checkbox" name="location[]" value="Fresno" id="region-select-states-2" class="in-checkbox">
                                          <label for="region-select-states-2" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                      <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-states-3" class="in-checkbox">
                                      <label for="region-select-states-3" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                <ul>
                                  <li>
                                          <input type="checkbox" name="location[]" value="Glendale" id="region-select-states-4" class="in-checkbox">
                                          <label for="region-select-states-4" data-toggle="tooltip" data-placement="top" title="Glendale" class="in-label">Glendale</label>
                                  </li>
                                  <li>
                                          <input type="checkbox" name="location[]" value="Long Beach" id="region-select-states-5" class="in-checkbox">
                                          <label for="region-select-states-5" data-toggle="tooltip" data-placement="top" title="Long Beach" class="in-label">Long Beach</label>
                                  </li>
                                  <li>
                                          <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-states-6" class="in-checkbox">
                                          <label for="region-select-states-6" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                    <ul>
                                      <li>
                                              <input type="checkbox" name="location[]" value="Bel Air" id="region-select-states-7" class="in-checkbox">
                                              <label for="region-select-states-7" data-toggle="tooltip" data-placement="top" title="Bel Air" class="in-label">Bel Air</label>
                                      </li>
                                      <li>
                                              <input type="checkbox" name="location[]" value="Brentwood" id="region-select-states-8" class="in-checkbox">
                                              <label for="region-select-states-8" data-toggle="tooltip" data-placement="top" title="Brentwood" class="in-label">Brentwood</label>
                                      </li>
                                      <li>
                                              <input type="checkbox" name="location[]" value="Holywood Hills" id="region-select-states-9" class="in-checkbox">
                                              <label for="region-select-states-9" data-toggle="tooltip" data-placement="top" title="Holywood Hills" class="in-label">Holywood Hills</label>
                                      </li>
                                      <li>
                                              <input type="checkbox" name="location[]" value="Mar Vista" id="region-select-states-10" class="in-checkbox">
                                              <label for="region-select-states-10" data-toggle="tooltip" data-placement="top" title="Mar Vista" class="in-label">Mar Vista</label>
                                      </li>
                                      <li>
                                              <input type="checkbox" name="location[]" value="Silver Lake" id="region-select-states-11" class="in-checkbox">
                                              <label for="region-select-states-11" data-toggle="tooltip" data-placement="top" title="Silver Lake" class="in-label">Silver Lake</label>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                          <input type="checkbox" name="location[]" value="Santa Ana" id="region-select-states-12" class="in-checkbox">
                                          <label for="region-select-states-12" data-toggle="tooltip" data-placement="top" title="Santa Ana" class="in-label">Santa Ana</label>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                      <input type="checkbox" name="location[]" value="Santa Clara" id="region-select-states-13" class="in-checkbox">
                                      <label for="region-select-states-13" data-toggle="tooltip" data-placement="top" title="Santa Clara" class="in-label">Santa Clara</label>
                                <ul>
                                  <li>
                                          <input type="checkbox" name="location[]" value="Cupertino" id="region-select-states-14" class="in-checkbox">
                                          <label for="region-select-states-14" data-toggle="tooltip" data-placement="top" title="Cupertino" class="in-label">Cupertino</label>
                                  </li>
                                  <li>
                                          <input type="checkbox" name="location[]" value="Mountain View" id="region-select-states-15" class="in-checkbox">
                                          <label for="region-select-states-15" data-toggle="tooltip" data-placement="top" title="Mountain View" class="in-label">Mountain View</label>
                                  </li>
                                  <li>
                                          <input type="checkbox" name="location[]" value="Palo Alto" id="region-select-states-16" class="in-checkbox">
                                          <label for="region-select-states-16" data-toggle="tooltip" data-placement="top" title="Palo Alto" class="in-label">Palo Alto</label>
                                  </li>
                                  <li>
                                          <input type="checkbox" name="location[]" value="San Jose" id="region-select-states-17" class="in-checkbox">
                                          <label for="region-select-states-17" data-toggle="tooltip" data-placement="top" title="San Jose" class="in-label">San Jose</label>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                            <div class="region-select__buttons">
                              <button type="button" class="region-select__btn region-select__btn--reset js-select-checkboxes-reset">Clear</button>
                              <button type="button" class="region-select__btn js-select-checkboxes-accept">Accept</button>
                            </div>
                          </div>
                          <!-- end of block .region-select-->
                  </div>
                  <!-- end of block .dropdown-menu-->
                </div>
              </div>
              <div class="form-group">
                <label for="in-datetime" class="control-label">Date Range</label>
                <input type="text" id="in-datetime" data-start-date="12/03/2015" data-end-date="12/22/2015" data-time-picker="true" data-single-picker="false" class="js-datetimerange form-control">
              </div>
              <div class="form-group">
                <div class="form__mode">
                  <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                </div>
                <label for="range_price" class="control-label">Price</label>
                <div class="form__ranges">
                  <input id="range_price" class="js-search-range form__ranges-in">
                </div>
                <div class="form__inputs js-search-inputs">
                  <input type="text" id="in-price-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                  <input type="text" id="in-price-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                </div>
              </div>
              <div class="form-group">
                <div class="form__mode">
                  <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                </div>
                <label for="range_area" class="control-label">Area</label>
                <div class="form__ranges">
                  <input id="range_area" class="js-search-range form__ranges-in">
                </div>
                <div class="form__inputs js-search-inputs">
                  <input type="text" id="in-area-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                  <input type="text" id="in-area-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                </div>
              </div>
              <div class="form__buttons form__buttons--double">
                <button type="button" class="form__reset js-form-reset">Reset</button>
                <button type="submit" class="form__submit">Search</button>
              </div>
            </div>
          </form>
          <!-- end of block-->
          <!-- END SEARCH-->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="widget js-widget widget--landing widget--gray">
  <div class="widget__header">
    <h2 class="widget__title">Real estates</h2>
    <h5 class="widget__headline">Our agents are licensed professionals that specialise in searching, evaluating and negotiating the purchase of property on behalf of the buyer. They will sell you real estate. Insights, tips & how-to guides on selling property and preparing your home or investment property for sale and working to maximise your sale price.</h5>
  </div>
  <div class="widget__content">
    <!-- BEGIN PROPERTIES INDEX-->
    <div class="tab tab--properties">
      <!-- Nav tabs-->
      <ul role="tablist" class="nav tab__nav">
        <li class="active"><a href="#tab-popular" aria-controls="tab-popular" role="tab" data-toggle="tab" class="properties__btn js-pgroup-tab">Popular</a></li>
        <li><a href="#tab-recent" aria-controls="tab-recent" role="tab" data-toggle="tab" class="properties__btn js-pgroup-tab">Recent</a></li>
        <li><a href="#tab-featured" aria-controls="tab-featured" role="tab" data-toggle="tab" class="properties__btn js-pgroup-tab">Featured</a></li>
      </ul>
      <!-- Tab panes-->
      <div class="tab-content">
        <div id="tab-popular" class="tab-pane in active">
          <div class="listing listing--grid">
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/02.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 65 Sq Ft</span><span class="properties__params">Land Size - 110 Sq Ft</span><span class="properties__intro">My home is bright and spacious. Very good transport links. Close to the Olympic village, Westfiel...</span><span class="properties__time">Added date: 5 days ago</span><span class="properties__more">View details</span>
                    </figure></a><span class="properties__ribon">For rent</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">649 West Adams Boulevard</span><span class="properties__address-city">Los Angeles, CA 90007, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> $79</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$4,555</strong><span class="properties__offer-period">/month</span>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 65 Sq Ft</span><span class="properties__params">Land Size - 110 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/img/no-image--554x360.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 205 Sq Ft</span><span class="properties__params">Land Size - 310 Sq Ft</span><span class="properties__intro">It was all finished, the Owl, as a last resource, she put them into a pig,' Alice quietly said, j...</span><span class="properties__time">Added date: 6 days ago</span><span class="properties__more">View details</span>
                    </figure></a><span class="properties__ribon">For sale</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">958 Dewey Avenue</span><span class="properties__address-city">Los Angeles, CA 90006, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> 5%</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$86,723</strong>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 205 Sq Ft</span><span class="properties__params">Land Size - 310 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/04.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 65 Sq Ft</span><span class="properties__params">Land Size - 120 Sq Ft</span><span class="properties__intro">Footman's head: it just grazed his nose, you know?' 'It's the oldest rule in the sea. But they HA...</span><span class="properties__time">Added date: 8 days ago</span><span class="properties__more">View details</span>
                    </figure></a><span class="properties__ribon">For sale</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1026 Ohio Avenue</span><span class="properties__address-city">Long Beach, CA 90804, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> $179</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$511,789</strong>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 65 Sq Ft</span><span class="properties__params">Land Size - 120 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/img/no-image--554x360.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 90 Sq Ft</span><span class="properties__intro">I am so VERY wide, but she got to do,' said the Hatter. 'You MUST remember,' remarked the King, '...</span><span class="properties__time">Added date: 10 days ago</span><span class="properties__more">View details</span>
                    </figure></a><span class="properties__ribon">For sale</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">514 East Myrtle Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> 8%</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$79,560</strong>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 90 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/06.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 505 Sq Ft</span><span class="properties__params">Land Size - 1010 Sq Ft</span><span class="properties__intro">I needn't be afraid of them!' 'And who is to France Then turn not pale, beloved snail, but come a...</span><span class="properties__time">Added date: 12 days ago</span><span class="properties__more">View details</span>
                    </figure></a><span class="properties__ribon">For rent</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 Martin Luther King</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> $550</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$2,255</strong><span class="properties__offer-period">/month</span>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 505 Sq Ft</span><span class="properties__params">Land Size - 1010 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/07.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 153 Sq Ft</span><span class="properties__intro">My home is bright and spacious. Very good transport links. Close to the Olympic village, Westfiel...</span><span class="properties__time">Added date: 15 days ago</span><span class="properties__more">View details</span>
                    </figure></a><span class="properties__ribon">For sale</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">401 South Sycamore Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> $790</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$6,218,780</strong>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 153 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
          </div>
        </div>
        <div id="tab-recent" class="tab-pane">
          <div class="listing listing--grid">
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/06.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params item-photo__hover--bottom"><span class="properties__param-type">Retail</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">377 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 Martin Luther King</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> $550</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$2,255</strong><span class="properties__offer-period">/month</span>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 505 Sq Ft</span><span class="properties__params">Land Size - 1010 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/07.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params item-photo__hover--bottom"><span class="properties__param-type">Public Infrastructure</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">460 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">401 South Sycamore Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> $790</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$6,218,780</strong>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 153 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/08.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params item-photo__hover--bottom"><span class="properties__param-type">Office</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">371 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">649 West Adams Boulevard</span><span class="properties__address-city">Los Angeles, CA 90007, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> 4%</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$3,100</strong><span class="properties__offer-period">/month</span>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 61 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/09.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params item-photo__hover--bottom"><span class="properties__param-type">Seniors Housing</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">190 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">2</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">958 Dewey Avenue</span><span class="properties__address-city">Los Angeles, CA 90006, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> 3%</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$23,351</strong>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 35 Sq Ft</span><span class="properties__params">Land Size - 150 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/10.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params item-photo__hover--bottom"><span class="properties__param-type">Student Housing</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">534 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">1</span></span></span></figure></a><span class="properties__ribon">For rent</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1026 Ohio Avenue</span><span class="properties__address-city">Long Beach, CA 90804, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> 1%</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$2750</strong><span class="properties__offer-period">/month</span>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 164 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/11.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params item-photo__hover--bottom"><span class="properties__param-type">Industrial</span><span class="properties__param"><span class="properties__param-column"><span class="properties__param-label">Area:</span><span class="properties__param-value">131 m2</span></span><span class="properties__param-column"><span class="properties__param-label">Beds:</span><span class="properties__param-value">1</span></span><span class="properties__param-column"><span class="properties__param-label">Baths:</span><span class="properties__param-value">2</span></span></span></figure></a><span class="properties__ribon">For sale</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">514 East Myrtle Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> $400</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$879,560</strong>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 52 Sq Ft</span><span class="properties__params">Land Size - 123 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
          </div>
        </div>
        <div id="tab-featured" class="tab-pane">
          <div class="listing listing--grid">
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/img/no-image--554x360.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 90 Sq Ft</span><span class="properties__intro">I am so VERY wide, but she got to do,' said the Hatter. 'You MUST remember,' remarked the King, '...</span><span class="properties__time">Added date: 10 days ago</span><span class="properties__more">View details</span>
                    </figure></a><span class="properties__ribon">For sale</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">514 East Myrtle Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> 8%</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$79,560</strong>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 90 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/06.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 505 Sq Ft</span><span class="properties__params">Land Size - 1010 Sq Ft</span><span class="properties__intro">I needn't be afraid of them!' 'And who is to France Then turn not pale, beloved snail, but come a...</span><span class="properties__time">Added date: 12 days ago</span><span class="properties__more">View details</span>
                    </figure></a><span class="properties__ribon">For rent</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">1230 Martin Luther King</span><span class="properties__address-city">Los Angeles, CA 90037, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> $550</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$2,255</strong><span class="properties__offer-period">/month</span>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 505 Sq Ft</span><span class="properties__params">Land Size - 1010 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
            <div class="listing__item">
              <div class="properties properties--grid">
                <div class="properties__thumb"><a href="property_details.html" class="item-photo"><img src="assets/media-demo/properties/554x360/07.jpg" alt=""/>
                    <figure class="item-photo__hover item-photo__hover--params"><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 153 Sq Ft</span><span class="properties__intro">My home is bright and spacious. Very good transport links. Close to the Olympic village, Westfiel...</span><span class="properties__time">Added date: 15 days ago</span><span class="properties__more">View details</span>
                    </figure></a><span class="properties__ribon">For sale</span>
                </div>
                <!-- end of block .properties__thumb-->
                <div class="properties__details">
                  <div class="properties__info"><a href="property_details.html" class="properties__address"><span class="properties__address-street">401 South Sycamore Street</span><span class="properties__address-city">Santa Ana, CA 92701, USA</span></a>
                    <div class="properties__offer">
                      <div class="properties__offer-column">
                        <div class="properties__offer-label">Commision</div>
                        <div class="properties__offer-value"><strong> $790</strong>
                        </div>
                      </div>
                      <div class="properties__offer-column">
                        <div class="properties__offer-value"><strong>$6,218,780</strong>
                        </div>
                      </div>
                    </div>
                    <div class="properties__params--mob"><a href="#" class="properties__more">View details</a><span class="properties__params">Built-Up - 85 Sq Ft</span><span class="properties__params">Land Size - 153 Sq Ft</span></div>
                  </div>
                </div>
                <!-- end of block .properties__info-->
              </div>
              <!-- end of block .properties__item-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="widget__footer"><a href="properties_listing_list.html" class="widget__more">More properties</a></div>
  </div>
</div>
<div class="widget js-widget">
  <div class="widget__content">
    <!-- BEGIN SECTION FEATURE-->
    <section class="feature">
      <div class="feature__picture"></div>
      <!-- end of .feature__picture-->
      <div class="container">
        <div class="feature__content">
          <div class="feature__header">
            <h3 data-sr="enter right ease-in-out 150px" class="feature__title">Meet Realtyspace</h3>
            <h4 data-sr="enter right ease-in-out 250px" class="feature__headline">Our mission is to empower consumers with information to make smart decisions. RealtySpace is a real estate marketplace dedicated to helping homeowners, home buyers, sellers, renters and agents find and share information about homes, real estate and home improvement.</h4>
          </div>
          <!-- end of block .feature__header-->
          <div class="feature__list">
            <div data-sr="enter right ease 150px" class="feature__item">
              <svg class="feature__icon feature__icon--money-save">
                <use xlink:href="#icon-money-save"></use>
              </svg>
              <div class="feature__item-content">
                <h3 class="feature__item-title">Save money</h3>
                <div class="feature__text">
                  <p>It starts with our living database of more than 110 million U.S. homes &ndash; including homes for sale, homes for rent and homes not currently on the market.</p>
                </div>
              </div>
            </div>
            <!-- end of block .feature__item-->
            <div data-sr="enter right ease 250px" class="feature__item">
              <svg class="feature__icon feature__icon--good-sales">
                <use xlink:href="#icon-good-sales"></use>
              </svg>
              <div class="feature__item-content">
                <h3 class="feature__item-title">Good sales&amp;marketing</h3>
                <div class="feature__text">
                  <p>In addition, RealtySpace operates the largest real estate and rental advertising networks in the U.S. in partnership with Livemile Homes!</p>
                </div>
              </div>
            </div>
            <!-- end of block .feature__item-->
            <div data-sr="enter right ease 150px" class="feature__item">
              <svg class="feature__icon">
                <use xlink:href="#icon-comfort"></use>
              </svg>
              <div class="feature__item-content">
                <h3 class="feature__item-title">Comfort</h3>
                <div class="feature__text">
                  <p>We are transforming the way consumers make home-related decisions and connect with professionals.</p>
                </div>
              </div>
            </div>
            <!-- end of block .feature__item-->
            <div data-sr="enter right ease 250px" class="feature__item">
              <svg class="feature__icon">
                <use xlink:href="#icon-easy"></use>
              </svg>
              <div class="feature__item-content">
                <h3 class="feature__item-title">Easy to find</h3>
                <div class="feature__text">
                  <p>It starts with our living database of more than 110 million U.S. homes &ndash; including homes for sale, homes for rent and homes not currently on the market.</p>
                </div>
              </div>
            </div>
            <!-- end of block .feature__item-->
          </div>
          <!-- end of block .feature__list-->
        </div>
        <!-- end of .feature__content-->
      </div>
    </section>
    <!-- END SECTION FEATURE-->
  </div>
</div>
<div class="widget js-widget widget--landing widget--gray">
  <div class="widget__header">
    <h2 class="widget__title">Our Agents</h2>
    <h5 class="widget__headline">Our agents are licensed professionals that specialise in searching, evaluating and negotiating the purchase of property on behalf of the buyer. They will sell you real estate. Insights, tips & how-to guides on selling property and preparing your home or investment property for sale and working to maximise your sale price.</h5>
  </div>
  <div class="widget__content">
    <!-- BEGIN SECTION WORKER INDEX-->
    <div class="listing listing--grid listing--lg-4">
      <div class="listing__item">
        <div data-sr="enter bottom move 80px, scale(0), over 0s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--index">
          <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-1.jpg" alt="Christopher Pakulla" class="photo"/></a>
            <div class="worker__details"><span class="worker__post">Realtor, West USA Realty</span>
              <div class="worker__links"><a class="worker__link">
                  <svg class="worker__link-icon">
                    <use xlink:href="#icon-mail"></use>
                  </svg></a><a class="worker__link"><i class="fa fa-linkedin"></i></a><a class="worker__link"><i class="fa fa-facebook"></i></a><a class="worker__link"><i class="fa fa-twitter"></i></a></div>
            </div>
          </div>
          <div class="worker__info">
            <h4 class="worker__name fn">Christopher Pakulla</h4><a href="tel:+44(0)2035102390" class="worker__tel uri">+44 (0) 20 3510 2390</a><a href="agent_profile.html" class="worker__more">Read more</a>
          </div>
          <!-- end of block .worker__info-->
        </div>
        <!-- end of block .worker-->
      </div>
      <div class="listing__item">
        <div data-sr="enter bottom move 80px, scale(0), over 0.3s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--index">
          <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-2.jpg" alt="Lisa Wemert" class="photo"/></a>
            <div class="worker__details"><span class="worker__post">Managing Broker/Partner, e-PRO</span>
              <div class="worker__links"><a class="worker__link">
                  <svg class="worker__link-icon">
                    <use xlink:href="#icon-mail"></use>
                  </svg></a><a class="worker__link"><i class="fa fa-linkedin"></i></a><a class="worker__link"><i class="fa fa-facebook"></i></a><a class="worker__link"><i class="fa fa-twitter"></i></a></div>
            </div>
          </div>
          <div class="worker__info">
            <h4 class="worker__name fn">Lisa Wemert</h4><a href="tel:+44(0)203510567" class="worker__tel uri">+44 (0) 20 3510 567</a><a href="agent_profile.html" class="worker__more">Read more</a>
          </div>
          <!-- end of block .worker__info-->
        </div>
        <!-- end of block .worker-->
      </div>
      <div class="listing__item">
        <div data-sr="enter bottom move 80px, scale(0), over 0.6s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--index">
          <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-3.jpg" alt="Mariusz Ciesla" class="photo"/></a>
            <div class="worker__details"><span class="worker__post">Real Estate Professional</span>
              <div class="worker__links"><a class="worker__link">
                  <svg class="worker__link-icon">
                    <use xlink:href="#icon-mail"></use>
                  </svg></a><a class="worker__link"><i class="fa fa-linkedin"></i></a><a class="worker__link"><i class="fa fa-facebook"></i></a><a class="worker__link"><i class="fa fa-twitter"></i></a></div>
            </div>
          </div>
          <div class="worker__info">
            <h4 class="worker__name fn">Mariusz Ciesla</h4><a href="tel:+44(0)203510334" class="worker__tel uri">+44 (0) 20 3510 334</a><a href="agent_profile.html" class="worker__more">Read more</a>
          </div>
          <!-- end of block .worker__info-->
        </div>
        <!-- end of block .worker-->
      </div>
      <div class="listing__item">
        <div data-sr="enter bottom move 80px, scale(0), over 0.8999999999999999s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--index">
          <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-4.jpg" alt="Vladimir Babic" class="photo"/></a>
            <div class="worker__details"><span class="worker__post">Realtor, CDPE</span>
              <div class="worker__links"><a class="worker__link">
                  <svg class="worker__link-icon">
                    <use xlink:href="#icon-mail"></use>
                  </svg></a><a class="worker__link"><i class="fa fa-linkedin"></i></a><a class="worker__link"><i class="fa fa-facebook"></i></a><a class="worker__link"><i class="fa fa-twitter"></i></a></div>
            </div>
          </div>
          <div class="worker__info">
            <h4 class="worker__name fn">Vladimir Babic</h4><a href="tel:+44(0)2044442390" class="worker__tel uri">+44 (0) 20 4444 2390</a><a href="agent_profile.html" class="worker__more">Read more</a>
          </div>
          <!-- end of block .worker__info-->
        </div>
        <!-- end of block .worker-->
      </div>
    </div>
    <!-- END SECTION WORKER INDEX-->
  </div>
</div>
<div class="widget js-widget widget--landing">
  <div class="widget__header">
    <h2 class="widget__title">News & Blog</h2>
    <h5 class="widget__headline">Find your apartment or house on the exact key parameters.</h5>
  </div>
  <div class="widget__content">
    <!--include ../widgets/article-->
    <div class="listing listing--grid">
      <div class="listing__item">
        <!-- BEGIN SECTION ARTICLE-->
        <div class="article article--grid"><a href="blog_details.html" class="article__photo"><img src="assets/media-demo/news/news-1.jpg" alt="News title" class="article__photo-img">
            <time datetime="2009-08-29" class="article__time">OCT<strong>27</strong></time></a>
          <div class="article__details"><a href="blog_details.html" class="article__item-title">Sustainable architecture &amp; design.</a>
            <div class="article__intro">
              <p>With the current state of the global climate and the depletion of natural  resources ...</p>
            </div><a href="blog_details.html" class="article__more">Read more</a>
          </div>
          <!-- end of block .articl-->
        </div>
        <!-- END SECTION ARTICLE-->
      </div>
      <div class="listing__item">
        <!-- BEGIN SECTION ARTICLE-->
        <div class="article article--grid"><a href="blog_details.html" class="article__photo"><img src="assets/media-demo/news/news-2.jpg" alt="News title" class="article__photo-img">
            <time datetime="2009-08-29" class="article__time">SEP<strong>02</strong></time></a>
          <div class="article__details"><a href="blog_details.html" class="article__item-title">You’ve been approved for a rental home.</a>
            <div class="article__intro">
              <p>If you bought a home in these four areas during the downturn, you’ll make a tidy ...</p>
            </div><a href="blog_details.html" class="article__more">Read more</a>
          </div>
          <!-- end of block .articl-->
        </div>
        <!-- END SECTION ARTICLE-->
      </div>
      <div class="listing__item">
        <!-- BEGIN SECTION ARTICLE-->
        <div class="article article--grid"><a href="blog_details.html" class="article__photo"><img src="assets/media-demo/news/news-3.jpg" alt="News title" class="article__photo-img">
            <time datetime="2009-08-29" class="article__time">AUG<strong>11</strong></time></a>
          <div class="article__details"><a href="blog_details.html" class="article__item-title">The Block Glasshouse winners.</a>
            <div class="article__intro">
              <p>The low-slung ranch house has been reborn. These minimalist designs have high ...</p>
            </div><a href="blog_details.html" class="article__more">Read more</a>
          </div>
          <!-- end of block .articl-->
        </div>
        <!-- END SECTION ARTICLE-->
      </div>
    </div>
    <div class="widget__footer"><a href="blog.html" class="widget__more"> More articles...</a></div>
  </div>
</div>
<div class="widget js-widget widget--landing widget--achievement">
  <div class="widget__content">
    <!-- BEGIN SECTION ACHIEVEMENT-->
    <div class="achievement">
      <div class="container">
        <div class="row">
          <div data-sr="enter right move 0 over 0 wait 0s" data-animate-callback="countUp" data-animate-end="achievement__item--animate-end" class="achievement__item">
            <svg class="achievement__icon">
              <use xlink:href="#icon-transactions"></use>
            </svg>
            <div data-count-end="755300" data-count-duration="1" class="achievement__counter achievement__counter--lg js-count-up"></div>
            <div class="achievement__counter">755 300</div>
            <div class="achievement__name">Transactions</div>
          </div>
          <div data-sr="enter right move 0 over 0 wait 0.5s" data-animate-callback="countUp" data-animate-end="achievement__item--animate-end" class="achievement__item">
            <svg class="achievement__icon">
              <use xlink:href="#icon-customers"></use>
            </svg>
            <div data-count-end="17620" data-count-duration="1" class="achievement__counter achievement__counter--lg js-count-up"></div>
            <div class="achievement__counter">17 620</div>
            <div class="achievement__name">Satisfied Customers</div>
          </div>
          <div data-sr="enter right move 0 over 0 wait 1s" data-animate-callback="countUp" data-animate-end="achievement__item--animate-end" class="achievement__item">
            <svg class="achievement__icon">
              <use xlink:href="#icon-agency"></use>
            </svg>
            <div data-count-end="790" data-count-duration="1" class="achievement__counter achievement__counter--lg js-count-up"></div>
            <div class="achievement__counter">790</div>
            <div class="achievement__name">Agencies</div>
          </div>
          <div data-sr="enter right move 0 over 0 wait 1.5s" data-animate-callback="countUp" data-animate-end="achievement__item--animate-end" class="achievement__item">
            <svg class="achievement__icon">
              <use xlink:href="#icon-sales"></use>
            </svg>
            <div data-count-end="1528715" data-count-duration="1" class="achievement__counter achievement__counter--lg js-count-up"></div>
            <div class="achievement__counter">1 528 715</div>
            <div class="achievement__name">Sales &amp; Rents</div>
          </div>
        </div>
      </div>
    </div>
    <!-- END SECTION ACHIEVEMENT-->
  </div>
</div>
<div class="widget js-widget widget--landing">
  <div class="widget__header">
    <h2 class="widget__title">Testimonials</h2>
    <h5 class="widget__headline">Insights, tips & how-to guides on selling property and preparing your home or investment property for sale.</h5>
  </div>
  <div class="widget__content">
    <!-- BEGIN SECTION REVIEW-->
    <div id="review-slider" class="review review--wide">
      <div class="review__slider js-slick-slider">
        <div class="review__item">
          <div class="review__photo"><img src="assets/media-demo/testimonials/01.jpg" alt="ALT" class="review__photo-img"></div>
          <div class="review__details"><span class="review__name">Vanessa Kasinsky</span><span class="review__post">Brand Manager</span>
            <div class="review__stars"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
          </div>
          <div class="review__info">
            <div class="review__info-quote review__info-quote--open">&rdquo;</div>
            <p>Mariusz always addressed my questions professionally and in a very timely manner. Working with him was a pleasure and would come with my recommendation.
            </p>
            <div class="review__info-quote review__info-quote--close">&ldquo;</div>
          </div>
          <div class="clearfix"></div>
          <!-- end of block .review__item-->
        </div>
        <div class="review__item">
          <div class="review__photo"><img src="assets/media-demo/testimonials/02.jpg" alt="ALT" class="review__photo-img"></div>
          <div class="review__details"><span class="review__name">Joseph Ryan</span><span class="review__post">Brand Manager</span>
            <div class="review__stars"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
          </div>
          <div class="review__info">
            <div class="review__info-quote review__info-quote--open">&rdquo;</div>
            <p>Mariusz always addressed my questions professionally and in a very timely manner. Working with him was a pleasure and would come with my recommendation.
            </p>
            <div class="review__info-quote review__info-quote--close">&ldquo;</div>
          </div>
          <div class="clearfix"></div>
          <!-- end of block .review__item-->
        </div>
        <div class="review__item">
          <div class="review__photo"><img src="assets/media-demo/testimonials/03.jpg" alt="ALT" class="review__photo-img"></div>
          <div class="review__details"><span class="review__name">Caroline Reynolds</span><span class="review__post">Brand Manager</span>
            <div class="review__stars"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
          </div>
          <div class="review__info">
            <div class="review__info-quote review__info-quote--open">&rdquo;</div>
            <p>Mariusz always addressed my questions professionally and in a very timely manner. Working with him was a pleasure and would come with my recommendation.
            </p>
            <div class="review__info-quote review__info-quote--close">&ldquo;</div>
          </div>
          <div class="clearfix"></div>
          <!-- end of block .review__item-->
        </div>
        <div class="review__item">
          <div class="review__photo"><img src="assets/media-demo/testimonials/04.jpg" alt="ALT" class="review__photo-img"></div>
          <div class="review__details"><span class="review__name">Ana Oliver</span><span class="review__post">Brand Manager</span>
            <div class="review__stars"><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i></div>
          </div>
          <div class="review__info">
            <div class="review__info-quote review__info-quote--open">&rdquo;</div>
            <p>Mariusz always addressed my questions professionally and in a very timely manner. Working with him was a pleasure and would come with my recommendation.
            </p>
            <div class="review__info-quote review__info-quote--close">&ldquo;</div>
          </div>
          <div class="clearfix"></div>
          <!-- end of block .review__item-->
        </div>
      </div>
      <!-- end of block .review__list-->
    </div>
    <!-- END SECTION REVIEW-->
  </div>
</div>
<div class="widget js-widget">
  <div class="widget__content">
    <!-- BEGIN BLOCK GO SUBMIT-->
    <div data-sr="flip 45deg over 0.5s" class="gosubmit">
      <div class="container">
        <div class="gosubmit__title">
          <div class="gosubmit__title__row gosubmit__title__row--first">Looking to</div>
          <div class="gosubmit__title__row gosubmit__title__row--second"><span class="gosubmit__title__option">Sell</span>or<span class="gosubmit__title__option">Rent</span></div>
          <div class="gosubmit__title__row gosubmit__title__row--third">Your Property?</div>
        </div>
        <!-- end of block .gosubmit__title--><a href="my_listings_add_edit.html" class="gosubmit__btn">Submit now</a>
      </div>
    </div>
    <!-- END BLOCK GO SUBMIT-->
  </div>
</div>
<div class="center">
  <div class="container">
  </div>
</div>
<!-- END CENTER SECTION-->
<!-- BEGIN AFTER CENTER SECTION-->
<div class="widget js-widget widget--landing">
  <div class="widget__header">
    <h2 class="widget__title"><span class="title-thin">Our</span> Partners</h2>
    <h5 class="widget__headline">At RS, our partners make great digital experiences possible by offering our products, consulting expertise and the products of our technology partners</h5>
  </div>
  <div class="widget__content">
    <!-- BEGIN PARTNERS-->
    <div id="partners-slider" class="partners">
      <div class="partners__slider js-slick-slider"><a class="partners__item"><img src="assets/media-demo/partners/logo-company-1.png" alt=""><span class="partners__name">Elite Construction Group, LLC</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-2.png" alt=""><span class="partners__name">Pro Era Limited</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-3.png" alt=""><span class="partners__name">Otdelka Real Estate LTD</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-4.png" alt=""><span class="partners__name">Fermer Realty Group</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-5.png" alt=""><span class="partners__name">Pro Era Limited</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-3.png" alt=""><span class="partners__name">Fermer Realty Group</span></a><a class="partners__item"><img src="assets/media-demo/partners/logo-company-2.png" alt=""><span class="partners__name">Otdelka Real Estate LTD</span></a>
      </div>
      <div class="partners__controls">
        <button class="partners__arrow partners__arrow--prev js-partners-prev"></button>
        <button class="partners__arrow partners__arrow--next js-partners-next"></button>
      </div>
      <!-- end of block .partners__controls-->
    </div>
    <!-- end of block .partners-->
  </div>
</div>
<!-- END PARTNERS-->
<div class="widget js-widget">
  <div class="widget__content">
    <!-- BEGIN SUBSCRIBE-->
    <div class="subscribe">
      <form action="#" class="subscribe__form js-subscribe-form">
        <h4 class="subscribe__title">Newsletters</h4>
        <div class="subscribe__group form-group">
          <label class="sr-only">Newsletters</label>
          <input type="email" placeholder="Input your e-mail" name="email" required data-parsley-trigger="change" class="subscribe__field form-control js-subscribe-email">
        </div>
        <button type="submit" class="btn--action subscribe__submit js-subscribe-submit">SUBMIT</button>
      </form>
      <!-- end of block .subscribe__form-->
    </div>
    <!-- END SUBSCRIBE-->
  </div>
</div>
<!-- END AFTER CENTER SECTION-->
