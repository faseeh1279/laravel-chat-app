const ChatHeader = () => {
    return (
        <div className="card-header bg-white border-bottom py-3">

            <div className="d-flex align-items-center">

                {/* Avatar */}
                <div
                    className="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                    style={{
                        width: "48px",
                        height: "48px",
                    }}
                >
                    <i className="bi bi-chat-dots fs-5"></i>
                </div>

                {/* Title */}
                <div className="flex-grow-1">

                    <h5 className="mb-0 fw-bold">
                        Community Chat
                    </h5>

                    <div className="d-flex align-items-center gap-2">

                        <span
                            className="bg-success rounded-circle"
                            style={{
                                width: "8px",
                                height: "8px",
                            }}
                        />

                        <small className="text-muted">
                            Everyone can join the conversation
                        </small>

                    </div>

                </div>

                {/* Members */}
                <div className="text-end d-none d-sm-block">

                    <div className="fw-semibold">
                        4 members
                    </div>

                    <small className="text-muted">
                        Online now
                    </small>

                </div>

            </div>

        </div>
    );
};

export default ChatHeader;