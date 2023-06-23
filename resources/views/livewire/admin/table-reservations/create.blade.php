<div>
    <div>
        <div>
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12">
                                <div class="card center">
                                    <div class="card-header">
                                        <h4>Create a New Table Reservation</h4>
                                    </div>
                                    <div class="card-body ring-offset-2">
                                        <form>
                                            <div class="form-group">
                                                <label>Customer Name</label>
                                                <input type="text" wire:model="title" class="form-control">
                                            </div>
                                            @error('title')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label>Date and time:</label>
                                                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                                                      <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                      </div>
                                                  </div>
                                              </div>
                                            {{-- <div class="form-group">
                                                <label>Choose the Category of your Menu Item</label>
                                                <select wire:model="menu_category_id" class="form-control">
                                                    <option>Choose a Menu Item Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('category')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror --}}

                                            <div class="form-group">
                                                <label>Reservation Date</label>
                                                <input type="text" wire:model="description" class="form-control">
                                            </div>
                                            @error('description')
                                                <span class="error text-danger">{{ $message }}</span>
                                            @enderror
                                            <label>Table Capacity</label>
                                            <input type="text" wire:model="description" class="form-control">
                                    </div>
                                    @error('description')
                                        <span class="error text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="card-body" class="btn-text-right">
                                        <div class="buttons">
                                            <button class="btn btn-success" type="submit"
                                                wire:click='createMenuItem'>Save</button>
                                            <a href="#" class="btn btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
</div>
</div>

{{-- <div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Date picker</h3>
        </div>
        <div class="card-body">
            <!-- Date -->
            <div class="form-group">
                <label>Date:</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <!-- Date and time -->
            <div class="form-group">
                <label>Date and time:</label>
                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input"
                        data-target="#reservationdatetime" />
                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <!-- /.form group -->
            <!-- Date range -->
            <div class="form-group">
                <label>Date range:</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- Date and time range -->
            <div class="form-group">
                <label>Date and time range:</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservationtime">
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

            <!-- Date and time range -->
            <div class="form-group">
                <label>Date range button:</label>

                <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange-btn">
                        <i class="far fa-calendar-alt"></i> Date range picker
                        <i class="fas fa-caret-down"></i>
                    </button>
                </div>
            </div>
            <!-- /.form group -->
        </div>
    </div>
</div> --}}
