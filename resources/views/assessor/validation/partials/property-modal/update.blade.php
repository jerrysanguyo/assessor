<!-- Property Appraisal Modal -->
<div class="modal fade" id="propertyAppraisalModal" tabindex="-1" role="dialog"
    aria-labelledby="propertyAppraisalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="propertyAppraisalModalLabel">Building Property Appraisal</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="propertyAppraisalForm">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="updatePropertyAppraisalUrl" value="{{ url('property-appraisal') }}">
                    <input type="hidden" id="appraisalId" name="id">
                    <div class="row">
                        <!-- Exempt and Additional Item -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="radio" id="Exempt" name="option" class="form-check-input"
                                        value="Exempt">
                                    <label class="form-check-label" for="Exempt">Exempt</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="radio" id="Additional" name="option" class="form-check-input"
                                        value="Additional">
                                    <label class="form-check-label" for="Additional">Additional Item</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12"> <!-- Actual Use -->
                            <div class="form-group">
                                <label for="AU">Actual Use</label>
                                <select id="AU" name="AU" class="form-control form-control-lg" required>
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
                        <div class="col-sm-12"> <!-- Description -->
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea id="Description" name="Description" class="form-control form-control-lg" rows="4" required></textarea>
                            </div>
                        </div>
                        <!-- Floor Area -->
                        <div class="form-group col-sm-6">
                            <label for="Area">Floor Area (sqm)</label>
                            <input type="number" id="Area" name="Area" class="form-control form-control-lg"
                                step="0.01">
                        </div>
                        <!-- Storey -->
                        <div class="form-group col-sm-6">
                            <label for="Story">Storey</label>
                            <select id="Story" name="Story" class="form-control form-control-lg">
                                <option value="1ST">1ST</option>
                                <option value="2ND">2ND</option>
                                <option value="3RD">3RD</option>
                                <option value="4TH">4TH</option>
                                <option value="5TH">5TH</option>
                            </select>
                        </div>
                        <!-- Type of Structure -->
                        <div class="form-group col-sm-12">
                            <label for="TypeOfStructure">Type of Structure</label>
                            <input type="text" id="TypeOfStructure" name="TypeOfStructure"
                                class="form-control form-control-lg">
                        </div>
                        <!-- Unit Value -->
                        <div class="form-group col-sm-6">
                            <label for="Unit_Value">Unit Value (₱)</label>
                            <input type="number" id="Unit_Value" name="Unit_Value" class="form-control form-control-lg"
                                step="0.01">
                        </div>
                        <!-- Adjustment Level -->
                        <div class="form-group col-sm-6">
                            <label for="AdjLvl">Adjustment Level (%)</label>
                            <input type="number" id="AdjLvl" name="AdjLvl" class="form-control form-control-lg"
                                step="0.01">
                        </div>
                        <!-- Market Value -->
                        <div class="form-group col-sm-6">
                            <label for="Market_Value">Market Value (₱)</label>
                            <input type="number" id="Market_Value" name="Market_Value"
                                class="form-control form-control-lg" step="0.01">
                        </div>
                        <!-- Assessment Level -->
                        <div class="form-group col-sm-6">
                            <label for="AL">Assessment Level (%)</label>
                            <select id="AL" name="AL" class="form-control form-control-lg">
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
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
