<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
 */

Broadcast::channel('OrderPrivateChannel.{objOrder}', OrderPrivateChannel::class);
Broadcast::channel('OrderPublicChannel.{objOrder}', OrderPublicChannel::class);
Broadcast::channel('ExceptionPrivateChannel', ExceptionPrivateChannel::class);