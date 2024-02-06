<div class="row mb-3">
    <div class="col-12 col-md-6">
    <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = __("alumni::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = [
          'Andaman And Nicobar Islands' =>'Andaman and Nicobar Islands',
            'Andhra Pradesh'=>'Andhra Pradesh',
            'Arunachal Pradesh'=>"Arunachal Pradesh",
            'Assam'=>'Assam',
            'Bihar'=>'Bihar',
            'Chandigarh'=>'Chandigarh',
            'Chhattisgarh'=>'Chhattisgarh',
            'Dadra_and Naga Haveli'=>'Dadra and Nagar Haveli',
            'Daman_and Diu'=>'Daman and Diu',
            'Delhi'=>'Delhi',
            'Goa'=>'Goa',
            'Gujarat'=>'Gujarat',
            'Haryana'=>'Haryana',
            'Himachal Pradesh'=>'Himachal Pradesh',
            'Jammu_and Kashmir'=>'Jammu and Kashmir',
            'Jharkhand'=>'Jharkhand',
            'Karnataka'=>'Karnataka',
            'Kerala'=>'Kerala',
            'Lakshadweep'=>'Lakshadweep',
            'Madhya Pradesh'=>'Madhya Pradesh',
            'Maharashtra'=>'Maharashtra',
            'Manipur'=>'Manipur',
            'Meghalaya'=>'Meghalaya',
            'Mizoram'=>'Mizoram',
            'Nagaland'=>'Nagaland',
            'Orissa'=>'Orissa',
            'Pondicherry'=>'Pondicherry',
            'Punjab'=>'Punjab',
            'Rajasthan'=>'Rajasthan',
            'Sikkim'=>'Sikkim',
            'Tamil Nadu'=>'Tamil Nadu',
            'Tripura'=>'Tripura',
            'Uttarakhand'=>'Uttarakhand',
            'Uttar Pradesh'=>'Uttar Pradesh',
            'West Bengal'=>'West Bengal',
            ];
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'slug';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="form-group">
              @if($counting != null)
        
            <?php
            $field_name = 'order';
            $field_lable = label_case($field_name);
            $field_relation = "counting";
            $field_placeholder = __("Select an option");
            $required = "";
            $value = $counting;
            $select_options = $value;
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        @else
            <?php
            $field_name = 'order';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = ""; 
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}

        
        @endif 
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'url';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-12">
    <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = __("alumni::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "required";
            $select_options = [
                '1' => 'Published',
                '0' => 'Unpublished',
                '2' => 'Draft'
            ];
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
</div>