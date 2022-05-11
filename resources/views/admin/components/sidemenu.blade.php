<aside class="menu">
    <div class="menu__wrapper">
        <a href="{{ route('admin.home') }}" class="menu__logo-link">
            <img class="menu__logo-img" src="{{ asset('img/logo.svg') }}" alt="Visma logo">
        </a>
        <ul class="menu__items">
            <li class="menu__group mb-4">
                <ul>
                    <li class="menu__item{{ request()->routeIs('admin.home') ? ' menu__item--active' : '' }}">
                        <a class="menu__item-link" href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="menu__item has-children{{ request()->is('admin') ? ' menu__item--active' : '' }}">
                        {{--<a class="menu__item-span"
                           href="{{ route('admin::order.overview') }}">{{ __('core::app.menu.item.orders') }}</a>
                        <ul class="menu__children">
                          <li
                            class="menu__item menu__item--child{{ request()->is('admin/order/overview') ? ' menu__item--active' : '' }}">
                            <a class="menu__item-link"
                               href="{{ route('admin::order.overview') }}">{{ __('core::app.menu.item.order.overview') }}</a>
                          </li>
                          <li
                            class="menu__item menu__item--child{{ request()->is('admin/order') ? ' menu__item--active' : '' }}">
                            <a class="menu__item-link"
                               href="{{ route('admin::order.index') }}">{{ __('core::app.menu.item.order.index') }}</a>
                          </li>
                        </ul>--}}
                    </li>
                </ul>
            </li>
            <li class="menu__group mb-4">
                <span class="menu__group-title">Assets</span>
                <ul>
                    <li class="menu__item has-children{{ request()->is('admin/media*') ? ' menu__item--active' : '' }}">
                        <a class="menu__item-span"
                           href="{{ route('admin.media.index') }}">Media</a>
                        <ul class="menu__children">
                            <li
                                class="menu__item menu__item--child{{ request()->is('admin/media') ? ' menu__item--active' : '' }}">
                                <a class="menu__item-link"
                                   href="{{ route('admin.media.index') }}">All media files</a>
                            </li>
                            <li
                                class="menu__item menu__item--child{{ request()->is('admin/media/create') ? ' menu__item--active' : '' }}">
                                <a class="menu__item-link"
                                   href="{{ route('admin.media.create') }}">Add media files</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu__group mb-4">
                <span class="menu__group-title">Management</span>
                <ul>
                    <li class="menu__item has-children{{ request()->is('admin/event*') ? ' menu__item--active' : '' }}">
                        <a class="menu__item-span"
                           href="{{ route('admin.event.index') }}">Events</a>
                        <ul class="menu__children">
                            <li
                                class="menu__item menu__item--child{{ request()->is('admin/event') ? ' menu__item--active' : '' }}">
                                <a class="menu__item-link"
                                   href="{{ route('admin.event.index') }}">All events</a>
                            </li>
                            <li
                                class="menu__item menu__item--child{{ request()->is('admin/event/create') ? ' menu__item--active' : '' }}">
                                <a class="menu__item-link"
                                   href="{{ route('admin.event.create') }}">Create event</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__item has-children{{ request()->is('admin/profile*') ? ' menu__item--active' : '' }}">
                        <a class="menu__item-span"
                           href="{{ route('admin.profile.index') }}">Profiles</a>
                        <ul class="menu__children">
                            <li
                                class="menu__item menu__item--child{{ request()->is('admin/profile') ? ' menu__item--active' : '' }}">
                                <a class="menu__item-link"
                                   href="{{ route('admin.profile.index') }}">All profiles</a>
                            </li>
                            <li
                                class="menu__item menu__item--child{{ request()->is('admin/profile/create') ? ' menu__item--active' : '' }}">
                                <a class="menu__item-link"
                                   href="{{ route('admin.profile.create') }}">Create profile</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu__group mb-4">
                <span class="menu__group-title">Tools</span>
                <ul>
                    <li class="menu__item has-children{{ request()->is('admin/administrator*') ? ' menu__item--active' : '' }}">
                        <a class="menu__item-span"
                           href="{{ route('admin.administrator.index') }}">Administrators</a>
                        <ul class="menu__children">
                            <li
                                class="menu__item menu__item--child{{ request()->is('admin/administrator') ? ' menu__item--active' : '' }}">
                                <a class="menu__item-link"
                                   href="{{ route('admin.administrator.index') }}">All administrators</a>
                            </li>
                            <li
                                class="menu__item menu__item--child{{ request()->is('admin/administrator/create') ? ' menu__item--active' : '' }}">
                                <a class="menu__item-link"
                                   href="{{ route('admin.administrator.create') }}">Create administrator</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
