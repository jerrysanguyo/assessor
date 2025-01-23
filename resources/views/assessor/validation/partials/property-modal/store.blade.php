<!-- Add Property Appraisal Modal -->
<div class="modal fade" id="addPropertyAppraisalModal" tabindex="-1" role="dialog"
    aria-labelledby="addPropertyAppraisalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="addPropertyAppraisalModalLabel">Add Property Appraisal</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addPropertyAppraisalForm" action="{{ route('property-appraisal.store') }}" method="POST">
                @csrf
                <input type="hidden" id="storePropertyAppraisalUrl" value="{{ route('property-appraisal.store') }}">
                <input type="hidden" name="TDNo" value="{{ $data->TDNo }}">
                <div class="modal-body">
                    <div class="row">

                        <!-- Options -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="radio" id="addExempt" name="option" class="form-check-input"
                                        value="Exempt">
                                    <label class="form-check-label" for="addExempt">Exempt</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="radio" id="addAdditional" name="option" class="form-check-input"
                                        value="Additional">
                                    <label class="form-check-label" for="addAdditional">Additional Item</label>
                                </div>
                            </div>
                        </div>


                        <!-- Actual Use -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="addAU">Actual Use</label>
                                <select id="addAU" name="AU" class="form-control form-control-lg" required>
                                    <option value="RESIDENTIAL">RESIDENTIAL</option>
                                    <option value="COMMERCIAL">COMMERCIAL</option>
                                    <option value="INDUSTRIAL">INDUSTRIAL</option>
                                    <option value="AGRICULTURAL">AGRICULTURAL</option>
                                    <option value="INSTITUTIONAL">INSTITUTIONAL</option>
                                    <option value="WAREHOUSE">WAREHOUSE</option>
                                    <option value="GOVERNMENT">GOVERNMENT</option>
                                </select>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="addDescription">Description</label>
                                <textarea id="addDescription" name="Description" class="form-control form-control-lg" rows="4" required></textarea>
                            </div>
                        </div>

                        <!-- Floor Area -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="addArea">Floor Area (sqm)</label>
                                <input type="text" id="addArea" name="Area"
                                    class="form-control form-control-lg"
                                    title="Please enter a valid number (e.g., 12345, 12,345.67)" required>
                            </div>
                        </div>

                        <!-- Storey -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="addStory">Storey</label>
                                <select id="addStory" name="Story" class="form-control form-control-lg">
                                    <option value="">-- Select Storey --</option>
                                    <option value="1ST">1ST</option>
                                    <option value="2ND">2ND</option>
                                    <option value="3RD">3RD</option>
                                    <option value="4TH">4TH</option>
                                    <option value="5TH">5TH</option>
                                </select>
                            </div>
                        </div>

                        <!-- Type of Structure -->
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="addTypeOfStructure">Type of Structure</label>
                                <input type="text" id="addTypeOfStructure" name="TypeOfStructure"
                                    class="form-control form-control-lg">
                            </div>
                        </div>

                        <!-- Unit Value -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="addUnit_Value">Unit Value (₱)</label>
                                <input type="text" id="addUnit_Value" name="Unit_Value"
                                    class="form-control form-control-lg"
                                    title="Please enter a valid number (e.g., 12345, 12,345.67)" required>
                            </div>
                        </div>

                        <!-- Adjustment Level -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="addAdjLvl">Adjustment Level (%)</label>
                                <input type="text" id="addAdjLvl" name="AdjLvl"
                                    class="form-control form-control-lg"
                                    title="Please enter a valid number (e.g., 12345, 12,345.67)" required>
                            </div>
                        </div>

                        <!-- Market Value -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="addMarket_Value">Market Value (₱)</label>
                                <input type="text" id="addMarket_Value" name="Market_Value"
                                    class="form-control form-control-lg"
                                    title="Please enter a valid number (e.g., 12345, 12,345.67)" required>
                            </div>
                        </div>

                        <!-- Assessment Level -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="addAL">Assessment Level (%)</label>
                                <select id="addAL" name="AL" class="form-control form-control-lg">
                                    <option value="35">35%</option>
                                    <option value="40">40%</option>
                                    <option value="45">45%</option>
                                    <option value="50">50%</option>
                                    <option value="55">55%</option>
                                    <option value="60">60%</option>
                                    <option value="65">65%</option>
                                    <option value="70">70%</option>
                                    <option value="75">75%</option>
                                    <option value="80">80%</option>
                                    <option value="90">90%</option>
                                    <option value="100">100%</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
