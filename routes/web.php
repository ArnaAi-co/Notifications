<?php
// PANEL NOTIFICATIONS
Route::group(['as' => 'admin.'], function () {
    Route::controller(PanelNotificationController::class)->group(function () {
        Route::resource('/panel-notifications', PanelNotificationController::class);
    });
});