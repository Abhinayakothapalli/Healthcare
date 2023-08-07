var coll = document.getElementsByClassName("collapsible");

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });
}

function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours;
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}

// Gets the first message
function firstBotMessage() {
    let firstMessage = "How's it going?"
    document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p>';

    let time = getTime();

    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);
}

firstBotMessage();

// Retrieves the response
function getHardResponse(userText) {
    let botResponse = getBotResponse(userText);
    let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
    $("#chatbox").append(botHtml);

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

//Gets the text text from the input box and processes it
function getResponse() {
    let userText = $("#textInput").val();

    if (userText == "") {
        userText = "I love Code Palace!";
    }

    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    setTimeout(() => {
        getHardResponse(userText);
    }, 1000)

}

// Handles sending text via button clicks
function buttonSendText(sampleText) {
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);

    //Uncomment this if you want the bot to respond to this buttonSendText event
    // setTimeout(() => {
    //     getHardResponse(sampleText);
    // }, 1000)
}

function sendButton() {
    getResponse();
}

function heartButton() {
    buttonSendText("Heart clicked!")
}

// Press enter to send a message
$("#textInput").keypress(function (e) {
    if (e.which == 13) {
        getResponse();
    }
});
function getBotResponse(input) {
    //rock paper scissors
    if (input == "what is subsidy") {
        return "A subsidy is an incentive given by the government to individuals or businesses in the form of cash, grants, or tax breaks that improve the supply of certain goods and services";
    } else if (input == "Will my health insurance policy cover my pre-existing illness?") {
        return "A pre-existing illness is a condition that the policyholder is already seeking treatment for at the time of buying a health insurance plan. While your health insurance provider might offer you coverage for your pre-existing illness, you will have to wait for a certain amount of time until you start receiving coverage. This is known as the waiting period. The waiting period can be up to four years in certain cases.";
    } else if (input == "What is required to file a health insurance claim?") {
        return "We buy health insurance so that we can make claims in case of hospitalization or any other medical emergency. Therefore, it is important to know how the health insurance claims process works. If you are availing yourself of the cashless facility, you need to present your identity proof and health insurance policy number to the hospital. If you have access to your health insurance card, you can present that too. The hospital might ask you to fill a pre-authorization form for cashless claims. In case of reimbursements, you have to submit medical bills along with original doctor prescriptions to your health insurance provider. This can be done digitally for faster processing of health insurance claims.";
    } else if (input == "How are health insurance claims usually settled?") {
        return "Health insurance claims are either settled in a cashless manner or they are reimbursed. In a cashless facility, your health insurance provider will directly settle your medical bills with your hospital. Only differences that are not covered in your health insurance policy will need to be paid by you. The cashless facility can, however, is only available at network hospitals. In case of reimbursement, you clear your dues with your hospital following which you make a claim with your health insurance provider. Your health insurance provider reimburses the claimed amount to you after applying exclusions if any.";
    } else if (input == "Can I have more than one health insurance policy?") {
        return "Yes, you are allowed to have more than one health insurance policy either from one provider or various ones. You can also split your claim on the different health insurance policies according to your sum insured.";
    }
    else if (input == "What should I look for when buying a health insurance policy?") {
        return "Buying a proper health insurance plan might help you in resolving such health-related issues by providing sufficient cover.Common coverage benefits offered under health insurance plans include like In-Patient Hospitalisation Expenses,Organ Donor Expenses etc..";
    }
    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    }else if (input == "who is ashish") {
        return "Ashish is your brother";
    } else {
        return "Try asking something else!";
    }
}