document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("quiz-form");
    const questions = document.querySelectorAll(".question");
    const prevButton = document.getElementById("prevButton");
    const nextButton = document.getElementById("nextButton");
    const submitButton = document.getElementById("submitButton");
    const message = document.getElementById("message");

    let currentQuestion = 0;

    function showQuestion(questionIndex) {
        questions.forEach((question, index) => {
            if (index === questionIndex) {
                question.style.display = "block";
            } else {
                question.style.display = "none";
            }
        });

        prevButton.disabled = questionIndex === 0;
        nextButton.disabled = questionIndex === questions.length - 1;
        submitButton.style.display = questionIndex === questions.length - 1 ? "block" : "none";
    }

    showQuestion(currentQuestion);

    nextButton.addEventListener("click", function () {
        if (currentQuestion < questions.length - 1) {
            currentQuestion++;
            showQuestion(currentQuestion);
        }
    });

    prevButton.addEventListener("click", function () {
        if (currentQuestion > 0) {
            currentQuestion--;
            showQuestion(currentQuestion);
        }
    }); form.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        let score = 0;

        formData.forEach((value, key) => {
            const questionIndex = key.slice(1);
            const correctAnswer = getCorrectAnswer(questionIndex);

            if (value === correctAnswer) {
                score++;
            }
        });

        const totalQuestions = questions.length;
        const percentage = (score / totalQuestions) * 100;

        let messageText = `Vous avez répondu correctement à ${score} sur ${totalQuestions} questions.`;
        if (percentage === 100) {
            messageText = "Félicitations ! Vous avez obtenu un score parfait !";
        } else if (percentage >= 70) {
            messageText = `Pas mal ! Vous avez un score de ${percentage}%.`;
        }

        message.textContent = messageText;
        message.style.display = "block";
        submitButton.disabled = true;
    });


    function getCorrectAnswer(questionIndex) {
        const correctAnswers = ["b", "a", "c", "a"];
        return correctAnswers[questionIndex - 1];
    }
});