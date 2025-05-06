<div class="height-calculator">
    <div class="tab-container">
        <button class="tab active" onclick="switchTab('english')">Feet and Lbs</button>
        <button class="tab" onclick="switchTab('metric')">CM and KG</button>
    </div>

    <form id="heightCalcForm">
        <div id="englishTab" class="tab-content">
            <label>Child’s Gender:
                <select id="gender" name="gender">
                    <option value="boy">Boy</option>
                    <option value="girl">Girl</option>
                </select>
            </label>
            <label>Child’s Age:
                <select id="ageEnglish">
                    <option value="">Select</option>
                    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
                </select>
            </label>
            <label>Child’s Height:
                <input type="number" id="childFeet" placeholder="Feet" min="1">
                <input type="number" id="childInches" placeholder="Inches" min="0">
            </label>
            <label>Child’s Weight:
                <input type="number" id="childWeightLbs" placeholder="Pounds (lbs)" min="1">
            </label>
            <label>Mother’s Height:
                <input type="number" id="motherFeet" placeholder="Feet" min="1">
                <input type="number" id="motherInches" placeholder="Inches" min="0">
            </label>
            <label>Father’s Height:
                <input type="number" id="fatherFeet" placeholder="Feet" min="1">
                <input type="number" id="fatherInches" placeholder="Inches" min="0">
            </label>
        </div>

        <div id="metricTab" class="tab-content" style="display: none;">
            <label>Child’s Gender:
                <select id="genderMetric" name="gender">
                    <option value="boy">Boy</option>
                    <option value="girl">Girl</option>
                </select>
            </label>
            <label>Child’s Age:
                <select id="ageMetric">
                    <option value="">Select</option>
                    <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
                </select>
            </label>
            <label>Child’s Height:
                <input type="number" id="childHeightCm" placeholder="cm" min="1">
            </label>
            <label>Child’s Weight:
                <input type="number" id="childWeightKg" placeholder="kg" min="1">
            </label>
            <label>Mother’s Height:
                <input type="number" id="motherCm" placeholder="cm" min="1">
            </label>
            <label>Father’s Height:
                <input type="number" id="fatherCm" placeholder="cm" min="1">
            </label>
        </div>

        <button type="button" onclick="calculateHeight()">Calculate</button>
        <button type="reset">Reset</button>
    </form>

    <div id="result"></div>
</div>
