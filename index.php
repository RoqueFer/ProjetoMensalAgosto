<!DOCTYPE html>
<html lang="pt" dir="ltr">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Calendar Project</title>\

        <meta name="description" contennt="Meu Projeto calendario"/>

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <h1>📅 Calendário<br> Meu projetinho de calendário</h1>
        </header>

        <!-- Relogio -->
         <div class="clock-container">
            <div id="clock"></div>
         </div>
        <!-- Calendario -->
         <div class="calendar">
            <div class="nav-btn-container">
                <button class="nav-btn">⬅</button>
                <h2 id="monthYear" style="Margin: 0"></h2>
                <button class="nav-btn">➡</button>
            </div>
            <div class="calendar-grid" id="calendar">
            </div>
         </div>   
        <!-- Modal p/ Add/Edit/Delete um evento -->
         <div id="eventSelectorWrapper">
            <label for="eventSelectorWrapper">
                    <strong>Select Event:</strong>
            </label>
            <select id="eventSelector">
                <option disabled selected>Choose Event...</option>
            </select>
         </div>
             
        <!-- Form Principal -->
        
        <form method="POST" id="eventForm">
            <input type="hidden" name="action" id="formAction" value="add">
            <input type="hidden" name="event_id" id="eventId" value="add">

            <label for="className">Nome da Aula</label>
            <input type="text" name="class_name" id="className" required>

            <label for="profName">Nome do professor</label>
            <input type="text" name="prof_name" id="profName" required>

            <label for="startDate">Data de Início</label>
            <input type="date" name="start_date" id="startDate" required>
            
            <label for="entDate">Data Fim</label>
            <input type="date" name="end_date" id="entDate" required>
            
            <button type="submit">💾</button>
        </form>

        <!-- Form Delete -->

        <form method="POST" onsubmit="return confirm('Tem certeza que quer excluir esse evento?')">
          <input type="hidden" name="action" value="delete">
          <input type="hidden" name="event_id" id="deletEventId">
          <button type="submit" class="submit-btn">🚮 Delete</button>
        </form>

        <!-- ❌ Cancel -->
         <button type="button" clas="submit-btn">❌ cancelar</button>

        <script src="calendar.js"></script> 
    </body>
</html>
