function renderMediaUploader(e){var a;return void 0!==a?void a.open():(a=wp.media.frames.mapFileFrame=wp.media({frame:"select",multiple:!1,library:{type:"image"},button:{text:"Select AJAX Loader"}}),a.on("select",function(){var t=a.state().get("selection").first().toJSON();e("#ajax_loader").val(t.id)}),void a.open())}!function(e){e("#ajax_loader_button").on("click",function(a){a.preventDefault(),renderMediaUploader(e)})}(jQuery);