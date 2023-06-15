@extends('layouts.frontend.app')

@section('header')
@include('partials.frontend.booking-header')
@endsection

@section('content')
<div class="template-component-booking template-section template-main" id="template-booking">

    <!-- Booking form -->
    <form action="{{ route('booking.store') }}" method="POST" onSubmit="return submitBooking();">
        @csrf
        <ul>
            <!-- Vehcile list -->

            <li>

                <!-- Step -->
                <div class="template-component-booking-item-header template-clear-fix">
                    <span>
                        <span>1</span>
                        <span>/</span>
                        <span>4</span>
                    </span>
                    <h3>Vehicle type</h3>
                    <h5>Select vehicle type below.</h5>
                </div>

                <!-- Content -->
                <div class="template-component-booking-item-content">

                    <!-- Vehicle list -->
                    <ul class="template-component-booking-vehicle-list">

                        <!-- Vehicle -->
                        @if(!empty($vehicleTypes) && count($vehicleTypes) > 0)
                        @foreach($vehicleTypes as $vehicleType)
                        <li data-id="{{ $vehicleType->image . '-' . $vehicleType->id }}" class="booking-vehicle-list-item" vehicle-type-id="{{ $vehicleType->id }}" onclick="vehicleFilter('{{ $vehicleType->image . '-' . $vehicleType->id }}')">
                            <div>
                                <div class="{{ $vehicleType->image }}"></div>
                                <div>{{ $vehicleType->name }}</div>
                            </div>
                        </li>
                        @endforeach
                        @else
                        <li>
                            <div>
                                <div>No vehicle types found.</div>
                            </div>
                        </li>
                        @endif
                    </ul>
                    <input type="hidden" name="vehicle_type_id" id="vehicle_type_id" value="" />

                </div>

            </li>
            <!-- Package list -->


            <li>

                <!-- Step -->
                <div class="template-component-booking-item-header template-clear-fix">
                    <span>
                        <span>2</span>
                        <span>/</span>
                        <span>4</span>
                    </span>
                    <h3>Wash packages</h3>
                    <h5>Which wash is best for your vehicle?</h5>
                </div>

                <!-- Content -->
                <div class="template-component-booking-item-content">

                    <!-- Package list -->
                    <ul class="template-component-booking-package-list">

                    @if(!empty($washPackages) && count($washPackages) > 0)
                        @foreach($washPackages as $washPackage)
                        <li data-id="{{ $washPackage->id }}" data-id-vehicle-rel="{{ $washPackage->vehicle_type_id }}">

                            <!-- Package -->
                        <li data-id="{{ $washPackage->vehicleType->image . '-' . $washPackage->vehicle_type_id }}" data-id-vehicle-rel="{{ $washPackage->vehicleType->image . '-' . $washPackage->vehicle_type_id }}" class="booking-package-list-item" wash-package-id="{{ $washPackage->id }}">

                            <!-- Header -->
                            <h4 class="template-component-booking-package-name">{{ $washPackage->name }}</h4>

                            <?php
                            $price = explode('.', $washPackage->price);
                            ?>
                            <!-- Price -->
                            <div class="template-component-booking-package-price">
                                <span class="template-component-booking-package-price-currency">$</span>
                                <span class="template-component-booking-package-price-total">{{ $price[0] }}</span>
                                <span class="template-component-booking-package-price-decimal">{{ $price[1] ?? '' }}</span>
                            </div>

                            <!-- Duration -->
                            <div class="template-component-booking-package-duration">
                                <span class="template-icon-booking-meta-duration"></span>
                                <span class="template-component-booking-package-duration-value">{{ $washPackage->time }}</span>
                                <span class="template-component-booking-package-duration-unit">min</span>
                            </div>

                            <!-- Services -->
                            {!! $washPackage->description !!}

                            <!-- Button -->
                            <div class="template-component-button-box">
                                <a href="#" class="template-component-button package-book-now-btn" onclick="washFilter('{{ $washPackage->id }}', '{{ $washPackage->vehicle_type_id }}')">
                                    Book Now</a>
                            </div>
                        </li>
                        @endforeach
                        @else 
                        <li>
                            <div class="template-component-booking-service-name">
                                <span>No wash packages found.</span>
                            </div>
                        </li>
                        @endif
                    </ul>
                    <input type="hidden" name="wash_package_id" id="wash_package_id" value="" />

                </div>

            </li>
            <!-- Service list -->


            <li>

                <!-- Step -->
                <div class="template-component-booking-item-header template-clear-fix">
                    <span>
                        <span>3</span>
                        <span>/</span>
                        <span>4</span>
                    </span>
                    <h3>Services menu</h3>
                    <h5>A la carte services menu.</h5>
                </div>

                <!-- Content -->
                <div class="template-component-booking-item-content">

                    <!-- Service list -->
                    <ul class="template-component-booking-service-list" id="services-menu-list">
                        
                        @if(!empty($servicesMenus) && count($servicesMenus) > 0)
                            @foreach($servicesMenus as $servicesMenu)
                            <li>
                                <!-- Name -->
                                <div class="template-component-booking-service-name">
                                    <span>{{ $servicesMenu->name }}</span>
                                    @if($servicesMenu->description)
                                    <a href="#" class="template-component-more-link">
                                        <span>More...</span>
                                        <span>Less...</span>
                                    </a>
                                    <div class="template-component-more-content">
                                        {!! $servicesMenu->description !!}
                                    </div>
                                    @endif
                                </div>

                                <!-- Duration -->
                                <div class="template-component-booking-service-duration">
                                    <span class="template-icon-booking-meta-duration"></span>
                                    <span class="template-component-booking-service-duration-value">{{ $servicesMenu->time }}</span>
                                    <span class="template-component-booking-service-duration-unit">min</span>
                                </div>

                                <?php
                                $price = explode('.', $servicesMenu->price);
                                ?>
                                <!-- Price -->
                                <div class="template-component-booking-service-price">
                                    <span class="template-icon-booking-meta-price"></span>
                                    <span class="template-component-booking-service-price-currency">$</span>
                                    <span class="template-component-booking-service-price-value">{{ $price[0] }}</span>
                                    <span class="template-component-booking-service-price-unit">{{ $price[1] ?? '' }}</span>
                                    <span class="template-component-booking-service-price-decimal"></span>
                                </div>

                                <!-- Button -->
                                <div class="template-component-button-box">
                                    <a style="cursor: pointer;" class="template-component-button" onclick="addService(this, '{{ $servicesMenu->id }}')">Book Now</a>
                                </div>

                            </li>
                            @endforeach
                            @else
                            <li>
                                <div class="template-component-booking-service-name">
                                    <span>No services found.</span>
                                </div>
                            </li>
                        @endif
                    </ul>
                    <input type="hidden" name="services_menu_id[]" id="services_menu_id" value="" />
                </div>

            </li>
            <!-- Summary -->


            <li>

                <!-- Step -->
                <div class="template-component-booking-item-header template-clear-fix">
                    <span>
                        <span>4</span>
                        <span>/</span>
                        <span>4</span>
                    </span>
                    <h3>Booking summary</h3>
                    <h5>Please provide us with your contact information.</h5>
                </div>


                <!-- Content -->
                <div class="template-component-booking-item-content">

                    <ul class="template-component-booking-summary template-clear-fix">

                        <!-- Duration -->
                        <li class="template-component-booking-summary-duration">
                            <div class="template-icon-booking-meta-total-duration"></div>
                            <h5>
                                <span id="hours">0</span>
                                <span>h</span>
                                &nbsp;
                                <span id="minutes">0</span>
                                <span>min</span>
                            </h5>
                            <span>Duration</span>
                        </li>

                        <input type="hidden" name="duration" id="duration" value="" />
                        <!-- Price -->
                        <li class="template-component-booking-summary-price ">
                            <div class="template-icon-booking-meta-total-price"></div>
                            <h5>
                                <span class="template-component-booking-summary-price-symbol">$</span>
                                <span class="template-component-booking-summary-price-value" id="total_price">0.00</span>
                            </h5>
                            <span>Total Price</span>
                        </li>
                        <input type="hidden" name="total_price" id="totalPrice" value="" />

                    </ul>

                </div>

                <!-- Content -->
                <div class="template-component-booking-item-content template-margin-top-reset">

                    <!-- Layout -->
                    <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                        <!-- First name -->
                        <li class="template-layout-column-left template-margin-bottom-reset">
                            <div class="template-component-form-field">
                                <label for="booking-form-first-name">First Name *</label>
                                <input type="text" name="first_name" id="booking-form-first-name" value="{{ old('first_name') }}" required />
                            </div>
                            @if ($errors->has('first_name'))
                                <span style="color: red;">{{ $errors->first('first_name') }}</span>
                            @endif
                        </li>

                        <!-- Second name -->
                        <li class="template-layout-column-right template-margin-bottom-reset">
                            <div class="template-component-form-field">
                                <label for="booking-form-second-name">Second Name *</label>
                                <input type="text" name="second_name" id="booking-form-second-name" value="{{ old('second_name') }}" required />
                            </div>
                            @if ($errors->has('second_name'))
                                <span style="color: red;">{{ $errors->first('second_name') }}</span>
                            @endif
                        </li>

                    </ul>

                    <!-- Layout -->
                    <ul class="template-layout-50x50 template-layout-margin-reset template-clear-fix">

                        <!-- E-mail address -->
                        <li class="template-layout-column-left template-margin-bottom-reset">
                            <div class="template-component-form-field">
                                <label for="booking-form-email">E-mail Address *</label>
                                <input type="email" name="email" id="booking-form-email" value="{{ old('email') }}" required />
                            </div>
                            @if ($errors->has('email'))
                                <span style="color: red;">{{ $errors->first('email') }}</span>
                            @endif
                        </li>

                        <!-- Phone number -->
                        <li class="template-layout-column-right template-margin-bottom-reset">
                            <div class="template-component-form-field">
                                <label for="booking-form-phone">Phone Number *</label>
                                <input type="text" name="phone_number" id="booking-form-phone" value="{{ old('phone_number') }}" required />
                            </div>
                            @if ($errors->has('phone_number'))
                                <span style="color: red;">{{ $errors->first('phone_number') }}</span>
                            @endif
                        </li>

                    </ul>

                    <!-- Layout -->
                    <ul class="template-layout-33x33x33 template-layout-margin-reset template-clear-fix">
                        <!-- Vehicle make -->
                        <li class="template-layout-column-left template-margin-bottom-reset">
                            <div class="template-component-form-field">
                                <label for="booking-form-vehicle-make">Vehicle Make</label>
                                <input type="text" name="vehicle_make" id="booking-form-vehicle-make" value="{{ old('vehicle_make') }}" />
                            </div>
                        </li>

                        <!-- Vehicle model -->
                        <li class="template-layout-column-center template-margin-bottom-reset">
                            <div class="template-component-form-field">
                                <label for="booking-form-vehicle-model">Vehicle Model</label>
                                <input type="text" name="vehicle_model" id="booking-form-vehicle-model" value="{{ old('vehicle_model') }}" />
                            </div>
                        </li>

                        <!-- Booking date -->
                        <li class="template-layout-column-right template-margin-bottom-reset">
                            <div class="template-component-form-field">
                                <label for="booking-form-date">Booking Date *</label>
                                <input type="text" data-field="datetime" name="booking_date" id="booking-form-date" value="{{ old('booking_date') }}" required />
                            </div>
                            @if ($errors->has('booking_date'))
                                <span style="color: red;">{{ $errors->first('booking_date') }}</span>
                            @endif
                        </li>

                    </ul>

                    <!-- Layout -->
                    <ul class="template-layout-100 template-layout-margin-reset template-clear-fix">

                        <!-- Message -->
                        <li>
                            <div class="template-component-form-field">
                                <label for="booking-form-message">Message *</label>
                                <textarea rows="1" cols="1" name="message" id="booking-form-message" required>{{ old('message') }}</textarea>
                            </div>
                            @if ($errors->has('message'))
                                <span style="color: red;">{{ $errors->first('message') }}</span>
                            @endif
                        </li>

                    </ul>

                    <!-- Text + submit button -->
                    <div class="template-align-center template-clear-fix template-margin-top-2">
                        <p class="template-padding-reset template-margin-bottom-2">We will confirm your appointment with you by phone or e-mail within 24 hours of receiving your request.</p>
                        <input type="submit" value="Confirm Booking" class="template-component-button" name="" id="booking-form-submit" />
                    </div>

                </div>

            </li>
        </ul>

    </form>
</div>

<script>
    // vehicle type filter
    function vehicleFilter(vehicle_data_id) {
        var booking_package_list_item = $('.booking-package-list-item[data-id-vehicle-rel="' + vehicle_data_id + '"]');
        var wash_package_id = '';
        if(booking_package_list_item.length > 0) {
            wash_package_id = booking_package_list_item.first().attr('wash-package-id');
        }
        var vehicle_type_id = $('.booking-vehicle-list-item[data-id="' + vehicle_data_id + '"]').attr('vehicle-type-id');
        getFilterServiceMenu(vehicle_type_id, wash_package_id);
    }

    function washFilter(vehicle_type_id, wash_package_id) {
        var previousPackageId = $('.booking-package-list-item.template-state-selected').attr('wash-package-id');
        if(previousPackageId !== undefined && previousPackageId == wash_package_id) {
            $('#services-menu-list').html('<li class="template-component-list-item">No services found.</li>');
            return;
        }
        getFilterServiceMenu(vehicle_type_id, wash_package_id);
    }

    function getFilterServiceMenu(vehicle_type_id, wash_package_id) {
        console.log(vehicle_type_id, wash_package_id);
        $.ajax({
            url: "{{ route('booking.filtered-services-menu') }}",
            method: 'GET',
            data: {
                vehicle_type_id: vehicle_type_id,
                wash_package_id: wash_package_id
            },
            success: function(data) {
                $('#services-menu-list').html(data.html);
            }
        });
    }

    function addService(button, service_id) {
        var services_menu_id = $('#services_menu_id').val();
        var services_menu_id_array = services_menu_id ? services_menu_id.split(',') : [];

        var index = services_menu_id_array.indexOf(service_id.toString());
        if (index > -1) {
            services_menu_id_array.splice(index, 1);
        } else {
            services_menu_id_array.push(service_id);
        }

        // Update the input field value
        $('#services_menu_id').val(services_menu_id_array.join(','));

        console.log($('#services_menu_id').val());
    }

    function submitBooking() {
        // append the select vehicle type id to the form data
        var vehicleTypeId = $('.booking-vehicle-list-item.template-state-selected').attr('vehicle-type-id');
        $('#vehicle_type_id').val(vehicleTypeId);

        // append the select wash package id to the form data
        var washPackageId = $('.booking-package-list-item.template-state-selected').attr('wash-package-id');
        $('#wash_package_id').val(washPackageId);

        // get hours and minutes values usign id and append in the duration
        var hours = $('#hours').text();
        console.log('hours', hours);
        var minutes = $('#minutes').text();
        console.log('minutes', minutes);
        var duration = hours + ':' + minutes;
        console.log('duration', duration);
        $('#duration').val(duration);
        // total price
        var totalPrice = $('#total_price').text();
        $('#totalPrice').val(totalPrice);

        return true;
    }

    $(document).ready(function () {
        // Attach event handler to the parent element using event delegation
        $(document).on('click', '.template-component-more-link', function (event) {
            event.preventDefault();
            $(this).siblings('.template-component-more-content').slideToggle();
            $(this).children('span').toggle();
        });
    });
</script>
@endsection