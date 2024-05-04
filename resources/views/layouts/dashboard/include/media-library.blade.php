<div class="modal fade image-upload-modal" id="media-library" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Media Library</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#upload-files" class="">Upload files</a></li>
                    <li><a data-toggle="tab" href="#media-library-files" class="media-list active">Media Library</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="upload-files" class="tab-pane fade in text-center">
                        <div class="drop-upload">
                            <label for="file-uploader">
                                <p>Click Here To Upload File</p>
                                <input type="file" name="file[]" id="file-uploader" multiple>
                                <a class="btn btn-primary">Select Files</a>
                                <p>Maximum upload file size: 128 MB. </p>
                            </label>
                        </div>
                    </div>
                    <div id="media-library-files" class="tab-pane fade in show active">
                        <div class="filter-file-out">
                            <div class="filter-left">
                                <div class="row filter-file d-none">
                                    <div class="col-md-8 sm-p-0">
                                        <div class="form-group">
                                            <label>Filter Media</label>
                                            <div class="clearfix"></div>
                                            <select class="form-control">
                                                <option>Images</option>
                                            </select>
                                            <select class="form-control">
                                                <option>All Dates</option>
                                                <option>January, 2021</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 sm-p-0">
                                        <div class="form-group">
                                            <label>Search</label>
                                            <div class="clearfix"></div>
                                            <input type="search" name="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row image-show-case media-files-wrapper loading">
                                    <ul class="dark-scrollbar media-files">

                                    </ul>
                                </div>
                            </div>
                            <div class="filter-right upload-image-pop-right dark-scrollbar media-details" style="display: none;">
                                <p>ATTACHMENT DETAILS
                                    <span class="float-right text-info cursor-pointer">Hide Details <i class="fas fa-angle-right text-info"></i></span>
                                </p>
                                <img src="" class="media-preview">
                                <table class="table table-borderless media-image-attribute">
                                    <tr>
                                        <td colspan="2"><p class="media-name"></p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="media-date">January 5, 2021</p></td>
                                        <td><p class="media-size">80 KB</p></td>
                                    </tr>
                                    <tr>
                                        <td><p class="media-dimensions">712 by 402 pixels</p></td>
                                        <td></td>
                                    </tr>
                                </table>
                                <p>
                                    <a href="#" class="text-success" data-toggle="modal" data-target="#upload-product-image-view">View</a>
                                    <a href="#" class="text-danger float-right" data-toggle="modal" data-target="#delete-confirmation">Delete</a>
                                </p>
                                <hr>
                                <div class="form-group image-attributes">
                                    <div class="row">
                                        <label class="col-md-4 text-right">Alt-text</label>
                                        <div class="col-md-8">
                                            <input type="text" name="" class="form-control media-alt-text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group image-attributes">
                                    <div class="row">
                                        <label class="col-md-4 text-right">Title</label>
                                        <div class="col-md-8">
                                            <input type="text" name="" class="form-control media-title">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group image-attributes">
                                    <div class="row">
                                        <label class="col-md-4 text-right">Caption</label>
                                        <div class="col-md-8">
                                            <textarea name="" rows="4" class="form-control media-caption"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group image-attributes">
                                    <div class="row">
                                        <label class="col-md-4 text-right">Description</label>
                                        <div class="col-md-8">
                                            <textarea name="" rows="4" class="form-control media-description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group image-attributes">
                                    <div class="row">
                                        <label class="col-md-4 text-right">File URL:</label>
                                        <div class="col-md-8">
                                            <input type="text" name="" class="form-control media-file-url" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary font-weight-bold media-library-select-btn">Select</button>
            </div>
        </div>
    </div>
</div>
@push('footer')
<script src="{{ asset('/backend/js/media-library.js') }}"></script>
@endpush