<div class="form-group">
    <input type="radio" value="{{ $paymentype->id }}" class="btn-check" id="payment-{{ $paymentype->slug }}"
        name="paymentype" {{ old('paymentype') == $paymentype->id ? 'checked' : '' }}>
    <label class="btn btn-outline-dark mb-4 mb-md-0" for="payment-{{ $paymentype->slug }}">
        {{-- <h6 class="fz-12 mb-0">
            {{ $paymentype->name }}
        </h6> --}}
        <img src="{{ $paymentype->media }}" class="p-2 rounded" style="max-height: 150px" alt="">
    </label>
</div>
