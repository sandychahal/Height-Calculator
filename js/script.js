function switchTab(tab) {
    document.getElementById('englishTab').style.display = tab === 'english' ? 'block' : 'none';
    document.getElementById('metricTab').style.display = tab === 'metric' ? 'block' : 'none';
    document.querySelectorAll('.tab').forEach(el => el.classList.remove('active'));
    document.querySelector(`.tab[onclick="switchTab('${tab}')"]`).classList.add('active');
}

function calculateHeight() {
    let gender = document.getElementById('gender').value;
    let motherFeet = parseInt(document.getElementById('motherFeet').value) || 0;
    let motherInches = parseInt(document.getElementById('motherInches').value) || 0;
    let fatherFeet = parseInt(document.getElementById('fatherFeet').value) || 0;
    let fatherInches = parseInt(document.getElementById('fatherInches').value) || 0;

    let motherHeight = (motherFeet * 12) + motherInches;
    let fatherHeight = (fatherFeet * 12) + fatherInches;

    let predictedHeightInches = gender === 'boy'
        ? (motherHeight + fatherHeight + 5) / 2
        : (motherHeight + fatherHeight - 5) / 2;

    let feet = Math.floor(predictedHeightInches / 12);
    let inches = Math.round(predictedHeightInches % 12);

    document.getElementById('result').innerText = 
        `Predicted Adult Height: ${feet} feet ${inches} inches`;

    // Metric
    let genderM = document.getElementById('genderMetric').value;
    let motherCm = parseFloat(document.getElementById('motherCm').value) || 0;
    let fatherCm = parseFloat(document.getElementById('fatherCm').value) || 0;

    let predictedCm = genderM === 'boy'
        ? (motherCm + fatherCm + 13) / 2
        : (motherCm + fatherCm - 13) / 2;

    if (motherCm > 0 && fatherCm > 0) {
        document.getElementById('result').innerText = 
            `Predicted Adult Height: ${Math.round(predictedCm)} cm`;
    }
}
