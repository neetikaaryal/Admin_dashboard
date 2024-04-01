<form method="POST" action="/send-notification">
    @csrf

    <div>
        <label for="token">Token:</label>
        <input type="text" id="token" name="token" class="form-control" required>
    </div>

    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" class="form-control" required></textarea>
    </div>

    <button type="submit">Save</button>
</form>