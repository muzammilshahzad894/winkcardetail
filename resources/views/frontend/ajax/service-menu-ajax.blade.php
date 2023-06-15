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